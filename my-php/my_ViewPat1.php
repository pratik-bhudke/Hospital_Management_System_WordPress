<?php

$db='hospital';
$user='root';
$pass='';

$con=mysqli_connect("",$user,$pass,$db) or die("error in connection ");
echo "PATIENT DATABASE";

$result=mysqli_query($con,"SELECT * FROM `hospital`.`patient`;");

while($row = mysqli_fetch_array($result)) 
{
echo"<br><br>";
echo "Patient No. : ".$row['pno'] ;
echo "<br>";
echo "Patient Name : ".$row['pname'] ;
echo "<br>";
echo "Phone No. : ".$row['pphone'] ;
echo "<br>";
echo "Problem : ".$row['problem'] ;
echo "<br>";
echo "Age : ".$row['age'] ;
echo "<br>";
echo "Address : ".$row['addr'] ;
echo "<br>";
echo "Date : ".$row['date'] ;
}
echo "<br>";

?>