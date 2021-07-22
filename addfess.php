<?php
include "conn.php";
$queryclass="Select * from student";
$resultclass=mysqli_query($conn,$queryclass);


if(isset($_POST['btnSubmit']))
{
    $Student=$_POST['Student'];
    $Month=$_POST['Month'];

    $query1="insert into fees(F_SId, F_Months)values('$Student', '$Month')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
      echo "<script>alert('Fees Added Successfully')</script>";
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

<label for="Student"><h4 style="color: blue">Students</h4></label><br/>
    <select name="Student" >
        <?php
        while($rowclass=mysqli_fetch_array($resultclass))
        {
        ?>
                <option value=<?php echo $rowclass['S_Id'];?>>
                <?php echo $rowclass['S_Name'];?>
                </option>
        <?php
        }
        ?>
    </select>
  </div>

  <div class="form-group">
    <label for="Month"><h4 style="color: white"> Month</h4></label>
    <input type="date" required class="form-control" name="Month" placeholder="Enter Father Name" style="width:50%; " id="Month">
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