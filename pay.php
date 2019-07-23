<?php
session_start();
?>

<?php
include("cr.php");
error_reporting(0);
$c=$_POST['cn'];
$n=$_POST['namec'];
$e=$_POST['ed'];
$o=$_POST['otp'];
if ($_POST['smt'])
{
$q="INSERT INTO payment VALUE ('$c','$n','$e','$o')";
$qe=mysqli_query($connec,$q);
echo "<h2>Payment Successful </h2>";
echo "<h2>Total fare is:"; 
echo $_SESSION['fr'];
echo "</h2>";
}
?>