<?php
include_once 'connection.php';

$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['email'];
$d=$_POST['password'];
$e=$_POST['inputAddress'];
$f=$_POST['inputAddress2'];
$g=$_POST['inputCity'];
$h=$_POST['inputState'];
$i=$_POST['inputZip'];
$j=$_POST['gridCheck'];
//echo "insert into register values(0,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
//exit;
	
$z=mysqli_query($con,"insert into register values(0,'$a','$b','$c','$d','$e','$f','$g','$h',$i,'$j')");
	if ($z) {
		echo 1;
	}
	else{
		echo 0;
	}
	




?>