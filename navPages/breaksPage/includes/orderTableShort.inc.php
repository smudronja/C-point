<?php 

$result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if ($resultCheck > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
           echo $row['timeSelect']." ";
           echo $row['firstLastName'].", ";
           echo $row['timeDuration']."<br>";
            } 
      } 