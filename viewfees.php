<?php
include "header.php";
include "conn.php";

$query="select * from fees";
$result=mysqli_query($conn,$query);

?>
    <section id="main-content">
      <section class="wrapper">

<div class="container">

<center><h1 class="h3 mb-4 text-gray-800">View Fees</h1></center>
          <a href='addfess.php'><button  style="background-color: #4CAF50; color: white; margin-left:5px; margin-top:5px; border-radius:10px;">Add Fees</button></a><br><br>
    <table class="table  table-hover">
        <tr>
            <th> Id</th>
            <th> Student Name</th>
            <th> Month</th>
            <th> Action</th>
         
        </tr>
        <?php while($row=mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo"<td>".$row['F_Id']."</td>";
        $query1="select * from student where S_Id=".$row['F_SId'];
        $result1=mysqli_query($conn,$query1);
        $row1=mysqli_fetch_row($result1);
        echo"<td>".$row1[1]."</td>";
        echo"<td>".$row['F_SId']."</td>";
        echo"<td>".$row['F_Months']."</td>";
        echo "<td><a href='deletefees.php?id=".$row['F_Id']."'>Delete</a> <a href='editfees.php?id=".$row['F_Id']."'>Update</a> </td>";
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