<?php

$db='hospital';
$user='root';
$pass='';

$con=mysqli_connect("",$user,$pass,$db) or die("error in connection ");

$a=$_POST["n1"];
$b=$_POST["n2"];
$c=$_POST["n3"];
$d=$_POST["n4"];
$e=$_POST["n5"];
$f=$_POST["n6"];
$g=$_POST["n7"];

if($a=="" || $b=="" || $c=="" || $d=="" || $e=="" || $f=="" || $g=="")
echo "Some DATA fields are EMPTY. Please recheck the form and SUBMIT again.....";
else if(mysqli_query($con,"INSERT INTO `hospital`.`patient`(`pno`, `pname`, `pphone`, `problem`, `age`, `addr`, `date`) VALUES ('$a','$b','$c','$d','$e','$f','$g');"))
header("Location: /hospital/manager/add-patients/");
else
echo "ERROR"

?>