<?php
include_once('db_connection.php');
$con=OpenCon();


// To calculate the age select the inserted date of birth  from the donors table and subtract the sysdate to the dob age will be calculated

$q1="SELECT SYSDATE";
$q2="SELECT dob FROM donors ";



















?>