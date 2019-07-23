<?php
header('location:home.html');
include("cr.php");
$ur=$_GET['user'];
$p=$_GET['pass'];
$cp=$_GET['cpass'];
$n=$_GET['name'];
$fn=$_GET['fname'];
$d=$_GET['dob'];
$g=$_GET['gen'];
$m=$_GET['mar'];
$o=$_GET['occ'];
$a=$_GET['adh'];
$em=$_GET['eml'];
$ad=$_GET['adr'];
if  ($_GET['submit'])
{
$q="INSERT INTO registered VALUES('$ur','$p','$n','$fn','$d','$g','$m','$o','&a','$em','$ad')";
$data=mysqli_query($connec,$q);
}
?>
