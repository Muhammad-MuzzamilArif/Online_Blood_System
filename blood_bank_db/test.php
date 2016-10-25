
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    -->
<?php
// Inialize session
session_start();
// All the data entered by user stored in variables below
$user = $_REQUEST["name"];
$pass = $_REQUEST["pass"];
// connection variable initialization
$connection = mysql_connect("localhost", "root", "")
or die("Could not connect to the server");
// connecting to database
$db = mysql_select_db("bbms", $connection)
or die("Could not select the database");
$forlogin = "select * from login";
$result = mysql_query($forlogin);
$flag = true;
while ($row = mysql_fetch_array($result)) {
if ($user == $row['username'] && $pass == $row['password']) {
$_SESSION['currentuser'] = $user;
header('Location:front_end.html');
$flag = false;
}
}
if ($flag == true)
// echo "Login Un-Successful!!";
header('Location:index.php?myerror=mismatch');
?>







<?php
// At the first start to your project make a connnection to database




//To get register to the website





// to get login to web site


















// admin view




















// employees view






















// users view




























// update function








?> 










</body>
</html>