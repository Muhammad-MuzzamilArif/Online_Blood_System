<?php

$n= $_POST["name"] ;
$c=$_POST['contact'];
 $d=$_POST["designation"];
$e= $_POST["email"];
$j=$_POST["job_type"];
$a=$_POST["age"];
$dp=$_POST["deptno."];
$u=$_POST["u_id"];
if(!empty( $_POST ))
{
    print_r($_POST);
    exit;
}
$mysqli = new mysqli('localhost','root','','blood_bank_db');
if($mysqli->connect_error){
    die('connect Error: ');
}
$sql= "INSERT INTO employees (name,contact,designation,email,job_type,age,deptno.,u_id)
VALUES('$n',$c,'$d','$e','$j',$a,$dp,$u)";
$result= $mysqli->query($sql);
if($result){
    echo "Success: Row ID:{$mysqli->insert_id}";
}
$mysqli->close();


?>