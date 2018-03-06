 <?php 


 
      $sql = "SELECT * FROM posts ORDER BY id DESC;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo  "<tr>"
             echo   "<td>".$row['monday']."</td>";
             echo    "<td>".$row['tuesday']."</td>";
             echo    "<td>".$row['wednesday']."</td>";
             echo    "<td>".$row['thursday']."</td>";
             echo    "<td>".$row['friday']."</td>";
             echo    "<td>".$row['saturday']."</td>";
            echo   "</tr>";
       

        }
      }




               