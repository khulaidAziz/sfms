<?php
include "conn.php";
$queryclass="Select * from class";
$resultclass=mysqli_query($conn,$queryclass);


if(isset($_POST['btnSubmit']))
{
    $StudentName=$_POST['StudentName'];
    $FatherName=$_POST['FatherName'];
    $StudentEmail=$_POST['StudentEmail'];
    $StudentPassword=$_POST['StudentPassword'];
    $Class=$_POST['Class'];
    $FeesStatus=$_POST['FeesStatus'];
    $imag=$_FILES['imge']['tmp_name']; 
    $imageName=addslashes(file_get_contents($imag));

    $query1="insert into student(S_Name, S_FName, S_Email, S_Password, S_Image, S_Class, S_FeesStatus)values('$StudentName', '$FatherName', '$StudentEmail', '$StudentPassword', '$imageName','$Class', '$FeesStatus')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
      echo "<script>alert('Student Added Successfully')</script>";
       header("Location:home.php");       
    }else{
         echo mysqli_error($conn);

//        echo "<script>alert('Some Error Occured')</script>";
    }
} 
include "header.php";


?>
    <section id="main-content">
      <section class="wrapper">

<div class="container">
<form method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="StudentName"><h4 style="color: black"> Studebt Name</h4></label>
    <input type="text" required class="form-control" name="StudentName" placeholder="Enter Student Name" style="width:50%; " id="StudentName">
  </div>

  <div class="form-group">
    <label for="FatherName"><h4 style="color: black"> Father Name</h4></label>
    <input type="text" required class="form-control" name="FatherName" placeholder="Enter Father Name" style="width:50%; " id="FatherName">
  </div>

  <div class="form-group">
    <label for="StudentEmail"><h4 style="color: black"> Student Mail </h4></label>
    <input type="text" required class="form-control" name="StudentEmail" placeholder="Enter Student Mail" style="width:50%; " id="StudentEmail">
  </div>
  
  <div class="form-group">
    <label for="StudentPassword"><h4 style="color: black"> Password </h4></label>
    <input type="text" required class="form-control" name="StudentPassword" placeholder="Enter Password" style="width:50%; " id="StudentPassword">
  </div>

  <label for="Class"><h4 style="color: black">Class</h4></label><br/>
    <select name="Class" >
        <?php
        while($rowclass=mysqli_fetch_array($resultclass))
        {
        ?>
                <option value=<?php echo $rowclass['C_Id'];?>>
                <?php echo $rowclass['C_Name'];?>
                </option>
        <?php
        }
        ?>
    </select>
  </div>
  
  <div class="form-group">
    <label for="FeesStatus"><h4 style="color: black"> Fees Status </h4></label>
    <input type="text" required class="form-control" name="FeesStatus" placeholder="Enter Fees Status" style="width:50%; " id="FeesStatus">
  </div>

  <div class="form-group">
  <label class="required">Upload Image<span>*</span></label>
  <input required type="file" name="imge" multiple id="FilUploader"/>
  </div>  

  <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
</form>
</div>
</section>
</section>

<?php
// }
include "Footer.php";
?>