<?php
include 'conn.php';
$id=$_GET['id'];  // getting id from url
$query2="select * from class where C_Id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data


if(isset($_POST['btnSubmit']))
{  
    $classname=$_POST['classname'];
    $classduration=$_POST['classduration'];
   
    $query1="update class set C_Name='$classname',C_Duration='$classduration' where C_Id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        header("Location:viewclass.php");
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


    <label for="classname">Class Name</label><br>
    <input type="text" name="classname" value="<?php echo $row2[1];?>" ><br>

    <label for="classduration">Class Duration</label><br>
    <input type="text" name="classduration" value="<?php echo $row2[2];?>" ><br>


  <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
</form>
</div>
</section>
</section>
<?php
include 'Footer.php';
?>