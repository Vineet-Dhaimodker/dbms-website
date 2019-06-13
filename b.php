<?php
$link = mysqli_connect("localhost","root","","project");
if($link===false)
{
	die("ERROR: Could not connect.".mysqli_connect_error());
}
$sql = "INSERT INTO student(Fname,Lname) values ('$_POST[Fname]','$_POST[Lname]')";
if(mysqli_query($link,$sql)){
echo "RECORD INSERTED SUCCESSFULLY";
}
else{
echo "ERROR: COULD NOT EXECUTE $sql." .mysqli_error($link);
}
mysqli_close($link);
?> 