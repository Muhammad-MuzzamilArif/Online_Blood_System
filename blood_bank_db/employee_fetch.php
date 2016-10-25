
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<div id="container">
            <h1>Employees</h1>
            <table cellpadding="5px" cellspacing="2px" class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Employee Id</th>
                        <th>Name</th>
                        <th>Job Type</th>
                        <th>Designation</th>
                        <th>Contact No</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                   require_once('db_connection.php'); 
                    $sql1="SELECT emp_id,name,contact,designation,job_type,age FROM employees ORDER BY emp_id";
                    //include_once('tutorial/crud.php');
                    $conn;
                    function SingleQuery($queri)
{
    //include('db_connection.php');
$conn=OpenCon();
	
	
	if($conn->query($queri) === TRUE)
	{
	//	CloseCon($conn);
		return true;
	}
	else
	{
		return $conn->error;
	}

}

                    $result=SingleQuery($sql1);
                    $numrows=mysqli_num_rows($conn,$result);
   // if ($numrows!==0){
     //   while($row = mysql_fetch_assoc($result))
        while($row = mysqli_fetch_assoc($conn,$result)){
                            echo"
                        <tr>
                            <td>" .$row['emp_id']."</td>
                            <td>".$row['name'] ."</td>
                            <td>".$row['job_type']."</td>
                            <td>".$row['designation']." </td>
                            <td>".$row['contact']."</td>
                            <td>". $row['age'] ." </td>
                        </tr>
                ";} ?>

                </tbody>
               <!-- <?php mysqli_free_result($result);  ?>-->
            </table>
 </div>
</body>
</html>