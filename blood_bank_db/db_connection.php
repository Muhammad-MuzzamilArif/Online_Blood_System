<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "blood_bank_db"; 
 $conn=new mysqli($dbhost,$dbuser,$dbpass,$db); 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>