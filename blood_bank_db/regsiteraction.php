<?php 
include "db_connection.php";


//$name=$email=$pass=$conpass="";

if($_SERVER["REQUEST_METHOD"]== "POST"){
$name=$_POST['name'];
$email=$_POST['email'];
$pass = $_POST['password'];
$conpass= $_POST['confirmpass'];
//$pass= PASSWORD_BCRYPT($_POST['password']);PASSWORD_BCRYPT($conpass=$_POST['confirm_password']);
}
//if(isset( $_POST['password'])==isset($_POST['confirm_password']))
if($pass === $conpass)
{
           // CRUD.PHP


           function SingleQuery($queri)
{
	$conn = OpenCon();
	
	$res=mysqli_query($conn,$queri);
    if($res=== TRUE)
	//if($conn->query($queri) === TRUE)
	{
	//	CloseCon($conn);
		return true;
	}
	else
	{
		return $conn->error;
	}

}
      //end here


$sql = "INSERT INTO register (email,name,password,confirmpass) VALUES ('$email','$name','$pass','$conpass')";
$result = SingleQuery($sql);

if($result === true)
{
	echo "<script> alert('Successfully Registered');window.location = 'webapp/main.html'; </script>   ";
   // header("location: index.html");
//	header("Refresh:2, url:../index.php");
}
else
{
	echo $result;
}
}
else {
    echo "<br> <h3> <script> alert('Password Unmatches..!  Enter Correct Password...! ');</script></h3>
    <script>
window.setTimeout(function() {
    window.location = 'register.php';
  }, 0000);
</script>
 ";
}

/*
if(isset($_POST['email'])){
if ($pass!==$conpass){
   // echo "<script> alert("PASSWORD Confirm"); </script>";
print 'password unmatches';
}
  
}
$q="INSERT INTO register (name,email,password,confirmpass) VALUES ('$name','$email','$pass','$conpass')";
//mysql_select_db('blood_bank_db');
$result= mysql_query($q);
 if(! $result ) {
      die('Could not enter data: ' . mysql_error());
   }
  else{ 
   echo "Entered data successfully\n";
  }
//          if(!$result){
 //         die("Could Not Enter Data.".mysql_error());
 //         }
 
/*   Due To continuously displaying code is omitted */
/* 
 if(isset($result)){

echo "<br>Welcome " . $name;
echo "<br> <h2> $name is Succesfully Registered. </h2>";
}
exit();
//mysql_close($conn);
//echo    $_SERVER['PHP_SELF'];

//header('Location:index.php');
*/

/* PHP INSERT Code */
/*
   $sql = 'INSERT INTO employee '.
      '(emp_name,emp_address, emp_salary, join_date) '.
      'VALUES ( "guest", "XYZ", 2000, NOW() )';
      
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   */
  
   
  // mysql_close($conn);


?>
