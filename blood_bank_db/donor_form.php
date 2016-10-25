<?php


include('crud.php');
if( isset($_POST['register']))
{
       echo "<script> alert('Thank You $name. You are Successfully Registered');window.location = 'webapp/main.html'; </script>   ";
    $name=$_POST['name'];
     $no=$_POST['phone'];
     $email=$_POST['email']=$_SESSION['email'];

    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $bg=$_POST['bloodg'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
     $dis=$_POST['disease'];
    $pass=$_POST['password'];

}

 
 $sql="INSERT INTO donor(name,contact,email,age, dob, bloodgroup, gender, city, disease, password) VALUES ($name,$no,$email,$age,$dob,$bg,$gender,$city,$dis,$pass)";
$result = SingleQuery($sql);
if($result === true)
{
	echo "<script> alert('Successfully Registered');window.location = 'webapp/index.html'; </script>   ";
   // header("location: index.html");
//	header("Refresh:2, url:../index.php");
}
else
{
	echo $result;
}





?> 
<?php
  /* $sql = 'SELECT * FROM donor';
   $resultset = $mysqli->query($sql);
   // By default, resultset's row is an associative array
   //  indexed by BOTH column-name AND column-number (starting at 0).
   foreach ($resultset as $row) {  // Loop thru all rows in resultset
      echo 'Retrieve via column name: id=', $row['id'], ', name=', $row['name'], '<br />';
      echo 'Retrieve via column number: id=', $row[0], ', name=', $row[1], '<br />';
      print_r($row); // for showing the contents of resultset's row
      echo '<br />';
   }
   echo '<br />';
 */
?>
