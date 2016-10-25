<?php
  $name = $email = $gender = $comment = $website = "";
      /*   
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
          //  $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
          //  $website = test_input($_POST["website"]);
        //    $comment = test_input($_POST["comment"]);
         //   $gender = test_input($_POST["gender"]);
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }



/*include('connection.php');
if (!empty($email) && !empty($pass)
){
    echo $email Logged In;
}

$email=$_POST['email'];
$pass=$_POST['password'];
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Login </title>
     <!-- Bootstrap CDN --> 
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Bootstrap CDN ends here -->
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
<link rel="stylesheet" href="styleee.css">

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
            
        <li role="presentation" ><a href="register.php"><span class="glyphicon glyphicon-user " > </span> Register</a></li>
          </ul>
          <ul class="nav nav-pills pull-left">
          <li role="presentation" ><a class="masthead-brand" href="index.html">BBMS</a></li></ul>
        </nav> </div>
    <!-- <a  href="index.php" >  <h2 class="masthead-brand pull-left" id="logo">BBMS</h2>
      </a> --> </div>
</div>



    <h2 > LOGIN </h2>
    or <a href="register.php"> Register</a>
<form action="tutorial/fulllogin.php" method="POST" >
<input type="email" name="email" placeholder="Email" required> 
<input type="password" name="password" placeholder="Password" required >

<input type="submit" value="Login">
<div class="form-group">
 
        <div class="col-sm-offset-2 col-sm-10">
 
          <div class="checkbox">
 
            <label>
 
              <input  selected checked type="checkbox"> Remember Me
 
            </label>
 
          </div>
 
        </div>
 
      </div>
 
</form>

<?php 


//include 'connection.php';
/*
if($email== "admin@yahoo.com")
{   // echo "<h1> Admin Log in </h1>";
$_SESSION['valid']=true;
$_SESSION['timeout']=time();
$_SESSION['email']='admin@yahoo.com';
session_start();
header("location:index.html");
}
elseif($email=="muzzamilarif12@yahoo.com"){
    session_start();
    echo "<br >
    Manager Signed IN" ;
    header ("location:front_end.html");

}
else{
   if(isset( $_POST['submit']) == true){
       
    echo "<br><script> alert('$email Logged in.'); </script>";
    
    header("location:front_end.html");
   }
   // header("Refresh:1; url=front_end.html",true,303);
}
?>

<!-- 
require_once'connection.php';
session_start();
// All the data entered by user stored in variables below
// $user = $_REQUEST["email"];
// $pass = $_REQUEST["password"];
// connection variable initialization
$connection = mysql_connect("localhost", "root", "")
or die("Could not connect to the server");
// connecting to database
$db = mysql_select_db("blood_bank_db", $connection)
or die("Could not select the database");
$forlogin = "SELECT  * FROM register email=$email";
$result = mysql_query($forlogin);
$flag = true;
while ($row = mysql_fetch_array($result)) {
if ($email == $row['email'] && $pass == $row['password']) {
$_SESSION['currentuser'] = $user;
header('Location:front_end.html');
$flag = false;
}
}
//if ($flag == true)
// echo "Login Un-Successful!!";
//header('Location:login.php');//?myerror=mismatch');


<!
</form>
<br > 
<form action="logout.php" method="POST">
<input type="submit" value="logout">
</form>     




/*
else{
    
 echo "<br> USER <h4>Your Given details are as :</h4>";
        // echo $name;
         //echo "<br>";
         
         echo $email;
         echo "<br>";
         
       //  echo $website;
       //  echo "<br>";
         
      //   echo $comment;
// echo "<br>";
         
        // echo $gender;         
         // define variables and set to empty values
}

*/
 
   


/*
if ($login='admin@yahoo.com') {
    
include 'connection.php' ;
$result = $conn->query("select * from admin where admin.designation = 'admin'");
echo $result; } */

?>
</body>
</html>