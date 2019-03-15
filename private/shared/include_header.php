<?php $page_title= $page_title ?? "Universal GP Calculator"?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo url_for("css/mine.css"); ?>"/>
     <link rel="stylesheet" media="all" href="<?php echo url_for("css/bootstrap.min.css"); ?>" />
    <title><?php echo $page_title ?></title>
</head>

<body> 


    <!-- The header stars here -->
    
    <!-- The header ends here -->


    <!-- The jumbo stars here -->
    <div class="jumbotron text-center">
	<div class="container">
		<h1>Grade Point Calculator(GPC). <span class="glyphicon glyphicon-thumbs-up"></span></h1>
		<h2><p class="">An Application  For Any University System!!.</p></h2>


	</div>
</div>
    <!-- The jumbo ends here -->
    <?php if($session->is_student_logged_in()) {?>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">GPC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo url_for('profile.php')?>">Home</a>
      <a class=" text-info nav-item nav-link"href="<?php echo url_for('/upload/stageone.php')?>">Upload Your Result</a>
      <a class=" text-info nav-item nav-link"href="<?php echo url_for('/upload/stageone.php')?>">Edit Your Profile</a>
      <a class="text-danger nav-item nav-link" href="<?php echo url_for('logout.php')?>">Logout</a>
      
    </div>
  </div>
</nav>

 </div>
    <?php } ?>