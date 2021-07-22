<?php
include 'conn.php';
$id=$_GET['id'];  // getting id from url
$query2="select * from fees where F_Id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data


if(isset($_POST['btnSubmit']))
{  
    $StudentName=$_POST['StudentName'];
    $Month=$_POST['Month'];
   
    $query1="update fees set F_SId='$StudentName',F_Months='$Month' where F_Id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        header("Location:viewfees.php");
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

    <label for="Month">Month</label><br>
    <input type="text" name="Month" value="<?php echo $row2[2];?>" ><br>

    <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
</form>
</div>
</section>
</section>
<?php
include 'Footer.php';
?>