<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from class where C_Id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:viewclass.php');
}else{
    echo "Failed";
}

?>