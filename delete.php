<?php
if(isset($_GET['btn'])){

$conn=mysql_connect("localhost","root","") or die("unable to connect");

$id=$_GET["st_id"];

$q = " DELETE from  student where usn='$id' ";
mysql_select_db("hostel");
$result=mysql_query($q,$conn) or die("cannot delete");
$count = ($result ? mysql_affected_rows ($conn) : 0);
if($count > 0){
 print "<center>SUCCESSFULLY DELETED</center>";
}
else{
 print "<center>ID NOT FOUND</center>";
}
mysql_close($conn);
}
?>

<html>
<body>
<center>
<fieldset>
<h2> ENTER THE STUDENT ID TO BE DELETE</h2><br>
<form action="delete.php" method="GET">
Student ID : <input type="text" name="st_id"><br><br>
<input type="submit" value="delete" name="btn"></h2>
<a href="index.php"><h3>Home Page</h3></a>
</form>
</fieldset>
</center>
</body>
</html>