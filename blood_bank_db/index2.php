
<?php
include 'crud.php';

$sql = "INSERT INTO register (email,username,password) VALUES ('ahmed@gmail.com','M Ahmed','ahmed')";
//$sqll="INSERT INTO testing (branchname,city)  VALUES ('gulshan','karachi')";

 /*$i="INSERT INTO user (name, email, address, contact) VALUES

( 'Masud', 'masud.eden@gmail.com', '', '01722817591'),
( 'Fahad', 'f@had.com', 'Dhaka,Bangladesh', '9879879'),
( 'Vimrul', 'vim@rul.com', 'lkdjf ajs flkaj ', '98679879'),
( 'sdfsdf', 'sdfsdsdf', 'dsfdsf sdf dsf', '5656456'),
( 'Fahad Billah', 'f@had.com', 'Dhaka,Bangladesh', '9879879')";

*/
$result = SingleQuery($sqll);

if($result === true)
{
	echo 'success';
	
}
else
{
	echo $result;
}
?>