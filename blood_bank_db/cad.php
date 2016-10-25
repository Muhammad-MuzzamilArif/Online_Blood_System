
<?php

function ExecuteQuery($sql,$name)
{
$conn=OpenCon();
if($conn->query($sql)===TRUE)
{
    return $name;
}
else
{
    $error ="Error Creating Table: " .$conn->error;
    CloseCon($conn);
    return $error;
}
}