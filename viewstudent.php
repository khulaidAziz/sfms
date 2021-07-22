<?php
include "header.php";
include "conn.php";


$query="select * from student";
$result=mysqli_query($conn,$query);

?>
    <section id="main-content">
      <section class="wrapper">

<div class="container">

<center><h1 class="h3 mb-4 text-gray-800">View Student</h1></center>
          <a href='addstudent.php'><button  style="background-color: #4CAF50; color: white; margin-left:5px; margin-top:5px; border-radius:10px;">Add Student</button></a><br><br>
    <table class="table  table-hover">
        <tr>
            <th> Id</th>
            <th> Student Name</th>
            <th> Father Nmae</th>
            <th> Student Email</th>
            <th> Password</th>
            <th> Class</th>
            <th> Fees Status</th>
            <th> Student Image</th>
            <th> Action</th>
         
        </tr>
        <?php while($row=mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo"<td>".$row['S_Id']."</td>";
        echo"<td>".$row['S_Name']."</td>";
        echo"<td>".$row['S_FName']."</td>";
        echo"<td>".$row['S_Email']."</td>";
        echo"<td>".$row['S_Password']."</td>";
        $query1="select * from class where C_Id=".$row['S_Class'];
        $result1=mysqli_query($conn,$query1);
        $row1=mysqli_fetch_row($result1);
        echo"<td>".$row1[1]."</td>";
        echo"<td>".$row['S_FeesStatus']."</td>";
        ?>
                 <td> <img width="80" height="80" alt="StudentImage" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['S_Image']); ?>"></td>

    <?php
        echo "<td><a href='deletestudent.php?id=".$row['S_Id']."'>Delete</a> <a href='editstudent.php?id=".$row['S_Id']."'>Update</a> </td>";
        echo "</tr>";
        }
        ?>
    </table>

</div>
</section>
</section>

<?php

include "footer.php";
    
?>