<?php

$db='hospital';
$user='root';
$pass='';

$con=mysqli_connect("",$user,$pass,$db) or die("error in connection ");
echo "STAFF DATABASE";

$result=mysqli_query($con,"SELECT * FROM `hospital`.`staff`;");

while($row = mysqli_fetch_array($result)) 
{
echo"<br><br>";
echo "Staff ID : ".$row['sno'] ;
echo "<br>";
echo "Name : ".$row['sname'] ;
echo "<br>";
echo "E-Mail : ".$row['email'] ;
echo "<br>";
echo "Phone No. : ".$row['sphone'] ;
echo "<br>";
echo "Specialist : ".$row['sp'] ;
echo "<br>";
echo "Qualification : ".$row['qual'] ;
echo "<br>";
echo "Experience : ".$row['exp'] ;
echo "<br>";
echo "Address : ".$row['addr'] ;
}
echo "<br>";

?>