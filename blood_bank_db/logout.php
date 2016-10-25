<?php 
session_start();
session_destroy();
header('Location:login.php');


//unset($_SESSION['email']);
//unset($_SESSION['password']);
//echo "<br> \t\tSession Cleared.";
//header('Refresh: 2; URL= login.php');
?>