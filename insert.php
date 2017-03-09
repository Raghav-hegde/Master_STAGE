<?php
if(isset($_GET['btn'])){

$conn=mysql_connect("localhost","root","") or die("unable to connect");
	
$id=$_GET["usn"];
$f=$_GET["name"];
$l=$_GET["address"];
$c=$_GET["contact"];
$dp=$_GET["rno"];

mysql_select_db("hostel");
$q=" insert into student values( '$id' , '$f' , '$l' , '$c' , '$dp'  ) ";
$result=mysql_query($q,$conn) or die("INSERTION FAILED");
if($result)
print "<center>SUCCESSFULLY INSERTED</center";
else 
print "<center>INSERTION FAILED</center>";
mysql_close($conn);
}
?>
<html>
<body><center><fieldset>
<form action="insert.php" method="GET">
<h2>ENTER STUDENT INFORMATION</h2>
<h3>USN:<input type="text" name="usn"><br><br>
NAME:<input type="text" name="name"><br><br> 
Address:<input type="text" name="address"><br><br>              
CONTACT:<input type="number" name="contact"><br><br>
Room NO.:<input type="number" name="rno"><br><br>
<input type="submit" value="Insert" name="btn"></h3>
<a href="index.php"><h3>Home Page</h3></a>
</form>
</fieldset>
</center></body>
</html>