<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Register </title>

 <!-- Bootstrap CDN --> 
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Bootstrap CDN ends here -->

<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
<link rel="stylesheet" href="style.css">

    <style>
    .masthead-brand {
    padding-top: 0px;
    margin:0px;
  margin-left: 10px;
  margin-right: 10px;
  font-family: Georgia, 'Times New Roman', Times, serif;
  text-align: left;
  display: inline;
  font-weight: 600px;
  font-size:20px;
  
}

.masthead-nav > li {
  display: inline-block;
  text-align: right;
 
}

nav > ul > li > a {
  color: white;
}
</style>
</head>
<body>
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
      </a> --> </div>
</div>

    <h2 > REGISTER </h2>
    <!-- OR
    <p>
    <span class="link"> <a href="login.php"> Login </a> </span> </p>
    -->
 <form action="regsiteraction.php" method="POST" >
 <input type="text" name="name" placeholder="Enter Username" > 
<input type="email" name="email" placeholder="Enter Email" required> 
<input type="password" name="password" placeholder="Create Password" required >
<input type="password" name="confirmpass" placeholder="Repeat Password" required >
<input type="submit" name="register" value="Register">
</form>



</body>
</html>