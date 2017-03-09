<?php
                $query1="Select * from student";
                $conn = mysql_connect("localhost","root","") or die("could not connect to mysql");
                mysql_select_db("hostel");
                $result = mysql_query($query1, $conn) or die("query failed  ");
?>
<html>
<body><center><fieldset>
<h1> TABLE INFORMATION</h1>
<h2>
            <table border=2>
            <tr>
                <td>USN</td>
                <td>Name</td>
                <td>Address</td>
                <td>Contact</td>
                <td>Room No.</td>
            </tr>
</h2>
       <?php	
          while ($array = mysql_fetch_row($result))
          {
              echo "<tr>";
              echo "<td>$array[0]</td>";
              echo "<td>$array[1]</td>";
              echo "<td>$array[2]</td>";
              echo "<td>$array[3]</td>";
              echo "<td>$array[4]</td>";
              echo "</tr>";
          }
		  mysql_close($conn);
      ?>
      </table><br/>
	  <a href="index.php">Home Page</a>
      </fieldset>
	  </center>
	  </body>
      </html>