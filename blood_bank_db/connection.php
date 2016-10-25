<?php


$host= "localhost";
$user="root";
$pass="";
$db="blood_bank_db";
$conn=new mysqli($host,$user,$pass,$db);
if(!$conn){
    echo "Connection Error".mysql_error();
}
else{
  //  echo "<br> Connection Established <br>";
}

?>
