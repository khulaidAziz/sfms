<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from student where S_Id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:viewstudent.php');
}else{
    echo "Failed";
}

?>