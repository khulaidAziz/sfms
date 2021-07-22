<?php
include "header.php";
include "conn.php";


$query="select * from class";
$result=mysqli_query($conn,$query);

?>
    <section id="main-content">
      <section class="wrapper">

<div class="container">

<center><h1 class="h3 mb-4 text-gray-800">View Classes</h1></center>
          <a href='addclass.php'><button  style="background-color: #4CAF50; color: white; margin-left:5px; margin-top:5px; border-radius:10px;">Add Class</button></a><br><br>
    <table class="table  table-hover">
        <tr>
            <th> Id</th>
            <th> Class Name</th>
            <th> Class Duration</th>
            <th> Action</th>
         
        </tr>
        <?php while($row=mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo"<td>".$row['C_Id']."</td>";
        echo"<td>".$row['C_Name']."</td>";
        echo"<td>".$row['C_Duration']."</td>";
        echo "<td><a href='deleteclass.php?id=".$row['C_Id']."'>Delete</a> <a href='editclass.php?id=".$row['C_Id']."'>Update</a> </td>";
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