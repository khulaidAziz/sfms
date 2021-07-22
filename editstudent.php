<?php
include 'conn.php';
$id=$_GET['id'];  // getting id from url
$query2="select * from student where S_Id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data


if(isset($_POST['btnSubmit']))
{  
    $StudentName=$_POST['StudentName'];
    $StuFName=$_POST['StuFName'];
    $StudentEmail=$_POST['StudentEmail'];
    $StudentPassword=$_POST['StudentPassword'];
    $Class=$_POST['Class'];
    $FeesStatus=$_POST['FeesStatus'];
    $StudentImage=$_POST['StudentImage'];
   
    $query1="update student set S_Name='$StudentName',S_FName='$SruFName', S_Email='$StudentPassword', S_Class='$Class', S_Image='$StudentImage' where S_Id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        header("Location:viewstudent.php");
    }else{
        echo mysqli_error($conn);
    }
}
include 'header.php';

?>
    <section id="main-content">
      <section class="wrapper">

<div class="content">
<form method="POST">

    <label for="StudentName">Student Name</label><br>
    <input type="text" name="StudentName" value="<?php echo $row2[1];?>" ><br>

    <label for="StuFName">Student Father Name</label><br>
    <input type="text" name="StuFName" value="<?php echo $row2[2];?>" ><br>

    <label for="StudentEmail">Student Email</label><br>
    <input type="email" name="StudentEmail" value="<?php echo $row2[3];?>" ><br>

    <label for="StudentPassword">Student Password</label><br>
    <input type="text" name="StudentPassword" value="<?php echo $row2[4];?>" ><br>

    <label for="Class">Class</label><br>
    <input type="text" name="Class" value="<?php echo $row2[7];?>" ><br>

    <label for="FeesStatus">Fees Status</label><br>
    <input type="text" name="FeesStatus" value="<?php echo $row2[6];?>" ><br>

    <label for="StudentImage">Student Image</label><br>
    <input type="text" name="StudentImage" value="<?php echo $row2[5];?>" ><br>

    <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
</form>
</div>
</section>
</section>
<?php
include 'Footer.php';
?>