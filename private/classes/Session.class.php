<?php 
class Session{
//properties for students session
    public $student_id;
    public $student_name;
    public $student_last_login;
    public $matnumber;
    public const STUDENT_MAX_TIME =60*60*24;

public function __construct(){
        session_start(); //turn the session start
        $this->check_stored_student_login();
    }


//for student session methods
public function student_login($student){
    //prevents session fixation attacks
    session_regenerate_id();
    if($student){
        $_SESSION['student_id']= $student->id;
        $this->student_id = $student->id;
        $this->student_name = $_SESSION['student_name']= $student->name;
        $this->student_last_login = $_SESSION['student_last_login'] = time();
        $this->matnumber = $_SESSION['matnumber']= $student->matnumber;
        
    }
    return true;
}
public function is_student_logged_in(){
    //return isset($this->student_id);
     return isset($this->student_id) && $this->student_login_duration_time();
}
public function student_logout(){
    unset($_SESSION['student_id']);
    unset($_SESSION['student_name']);
    unset($_SESSION['student_last_login']);
    unset($_SESSION['matnumber']);
    unset($this->student_id);
    unset($this->student_name);
    unset($this->student_last_login);
    unset($this->matnumber);
    return true;
}
private function check_stored_student_login(){
    if(isset($_SESSION['student_id'])){
    $this->student_id = $_SESSION['student_id'];
    $this->student_name = $_SESSION['student_name'];
    $this->student_last_login = $_SESSION['student_last_login'];
    $this->matnumber = $_SESSION['matnumber'];
    
}
}
private function student_login_duration_time(){
    if(!isset($this->student_last_login)){
        return false;
    }elseif(($this->student_last_login + self::STUDENT_MAX_TIME) < time()){
        return false;
    }else{
        return true;
    }
} 
public function message($msg=""){
    if(!empty($msg)){
        //this is set message
        $_SESSION['message']=$msg;
        return true;
    }else{
        //this is a get message;
        return $_SESSION['message'] ?? '';
    }

}
public function clear_message(){
    unset($_SESSION['message']);
}
}

 
?>