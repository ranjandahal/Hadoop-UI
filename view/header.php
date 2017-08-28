<?php $app_path = "/reu/"; ?>
    
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hadoop UI</title>
    <link href="<?php echo $app_path ?>css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $app_path ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $app_path ?>css/animate.css">
	<link href="<?php echo $app_path ?>css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo $app_path ?>css/style.css" rel="stylesheet" />	
        <script src="<?php echo $app_path ?>js/jquery.js"></script>
        <script src="<?php echo $app_path ?>js/bootstrap.js"></script>
        <style>
            footer{
                margin: 0 auto;
                text-align: center;
                min-height: 100px;
                padding: 20px;
            }
           
        </style>
  </head>
  <body>
      <header>		
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navigation">
                <div class="container">					
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                                <a href="<?php echo $app_path ?>index.php"><h1><span>Hadoop</span>UI</h1></a>
                        </div>
                    </div>
                    <div class="navbar-collapse collapse">							
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="<?php echo $app_path ?>index.php" class="active">Dashboard</a></li>
                                <li role="presentation"><a href="<?php echo $app_path ?>jobs/index.php">Jobs</a></li>
                                <li role="presentation"><a href="<?php echo $app_path ?>logs/index.php">Logs</a></li>						
                                <li role="presentation"><a href="<?php echo $app_path ?>upload/index.php">Files</a></li>						
                            </ul>
                        </div>
                    </div>						
                </div>
            </div>	
        </nav>		
        </header>
	
      <div class="container" style="margin-top: 100px;">

