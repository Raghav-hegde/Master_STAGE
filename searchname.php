<?php
if(isset($_GET['btn'])){
$conn=mysql_connect("localhost","root","") or die("unable to connect");

$id=$_GET["name"];

$q="select * from student where name like '$id' ";
$mysql=mysql_select_db("hostel");
$result=mysql_query($q,$conn) or die("NOT FOUND");
$val=mysql_affected_rows($conn);
if($val){
print "<center>NAME '$id' IS FOUND</center><br/>";
echo "<html>";
echo "<body><center>";
echo "<h1> Student Information </h1>";
        echo "<table border=2>";
        echo  "<tr>";
         echo "<td>USN</td>";
         echo "<td>Name</td>";
          echo " <td>Address</td>";
           echo "<td>Contact</td>";
            echo "<td>Room no</td>";
            echo "</tr>";	
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

 echo "</table><br/><br/>";
 echo "</body>";
 echo "</center>";
 echo "</html>";
 }
else
print "<center>NAME '$id' NOT FOUND</center>";
 mysql_close($conn);
 }
 ?>

<html>
<body>
<center>
<fieldset>
<h2> ENTER THE STUDENT NAME TO BE SEARCHED</h2><br/>
<form action="searchname.php" method="GET">
Name : <input type="text" name="name"><br /><br />
<input type="submit" value="search" name="btn"><br/>
<a href="index.php"><h3>Home Page<h3></a>
<a href="search.php"><h3>Back to Search menu</h3></a>
</fieldset>
</center>
</body>
</html>