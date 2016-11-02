<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content="Muzzamil Arif">
        <meta name="keywords" content=" BBMS, Blood Bank, Blood Donation">

        <title><?php echo PROJECT_NAME ?> BBMS</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
        <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    <!--    <link rel="stylesheet" href="style.css"> -->


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="bootstrap/html5shiv.js"></script>
          <script src="bootstrap/respond.min.js"></script>
        <![endif]-->
<style>
.header{
    border-bottom: 0px solid black;
    padding: 10px;
    margin:5px;
    width:100%;
    text-align: center;
    font-size: 20px;
}
.header  a{
    display: inline-block;
    color: darkblue;
    font-size: 36px;
    
    text-decoration: none;
}
.footer{
    margin:0px;
    vertical-align:bottom;
}
</style>



    </head>
    <body>

<div class="header"><a href="index.php"> Blood Bank Management System </a></div>
<div class=" clearfix">

        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php" target="_self"><span class="fa fa-home">BBMS</span> </a>
                </div>


<!--
<div class="header"><a href="index.php"> Blood Bank Management System </a></div>
<div class=" clearfix">
   
   <div class="navbar navbar-inverse">
        <nav>
        
          <ul class="nav nav-pills  pull-right masthead-nav ">
            <li role="presentation" class=""><a href="webapp/index.html">Home</a></li>
            <li role="presentation" ><a href="about.html">About</a></li>
            <li role="presentation" ><a href="features.html">Features</a></li>
            <li role="presentation" ><a href="contact.html">Contact</a></li>
            <li role="presentation" ><a href="login.php"><span class="glyphicon glyphicon-user " > </span> Login</a></li>
        
          </ul>
          <ul class="nav nav-pills pull-left">
          <li role="presentation" ><a class="masthead-brand" href="index.html">BBMS</a></li></ul>
        </nav> </div>
    <!-- <a  href="index.php" >  <h2 class="masthead-brand pull-left" id="logo">BBMS</h2>
      </a> --> 








                <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1" >
                    <ul class="nav navbar-nav">
            <li role="presentation" class=""><a href="webapp/index.html">Home</a></li>
            <li role="presentation" ><a href="about.html">About</a></li>
            <li role="presentation" ><a href="features.html">Features</a></li>
            <li role="presentation" ><a href="contact.html">Contact</a></li>
            <li role="presentation" ><a href="../login.php"><span class="glyphicon glyphicon-user " > </span> Login</a></li>
        


               <!--         <li><a href="http://www.thesoftwareguy.in/php/">A </a></li>
                        <li><a href="http://www.thesoftwareguy.in/php-tutorial/">PHP Tutorial</a></li>
                        <li><a href="http://www.thesoftwareguy.in/facebook/">Facebook</a></li>
                        <li><a href="http://www.thesoftwareguy.in/jquery/">jQuery</a></li>
                        <li><a href="http://www.thesoftwareguy.in/tag/ajax/">Ajax</a></li>
                        <li><a href="http://www.thesoftwareguy.in/premium-projects/">Premium Projects</a></li>
                        <li><a href="http://www.thesoftwareguy.in/mini-project/">Mini Projects</a></li>
                 -->   </ul>

                </div>
    </div></div>

        </div>

        <div class="container mainbody">
            <div class="page-header">
                <h1><?php echo $title ?></h1>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="container-fluid">

                <?php if ($ERROR_MSG <> "") { ?>
                    <div class="col-lg-12">
                        <div class="alert alert-dismissable alert-<?php echo $ERROR_TYPE ?>">
                            <button data-dismiss="alert" class="close" type="button">x</button>
                            <p><?php echo $ERROR_MSG; ?></p>
                        </div>
                        <div style="height: 10px;">&nbsp;</div>
                    </div>
            
                <?php } ?>