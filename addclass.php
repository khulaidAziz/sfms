<?php
include "conn.php";

if(isset($_POST['btnSubmit']))
{
    $classname=$_POST['classname'];
    $classduration=$_POST['classduration'];

    $query1="insert into class(C_Name, C_Duration)values('$classname', '$classduration')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
      // echo "<script>window.location.href ='index.php'</script>";
      echo "<script>alert('Class Added Successfully')</script>";
       header("Location:viewclass.php");       
    }else{
        // echo mysqli_error($conn);

        echo "<script>alert('Some Error Occured')</script>";
    }
} 
include "header.php";

// if(isset($_SESSION['admin_id'])) 
// {
//     $id=$_SESSION['admin_id'];


?>
    <section id="main-content">
      <section class="wrapper">

<div class="container">
<form method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="classname"><h4 style="color: black"> Class Name</h4></label>
    <input type="text" required class="form-control" name="classname" placeholder="Enter Class Name" style="width:50%; " id="classname">
  </div>

  <div class="form-group">
    <label for="classduration"><h4 style="color: black"> Class Duration</h4></label>
    <input type="text" required class="form-control" name="classduration" placeholder="Enter Class Duration" style="width:50%; " id="classduration">
  </div>


  <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
</form>
</div>

</section>
</section><?php
include "footer.php";
?>