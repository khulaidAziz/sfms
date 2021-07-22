<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from fees where F_Id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:viewfees.php');
}else{
    echo "Failed";
}

?>