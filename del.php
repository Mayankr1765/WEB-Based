<?php
include("cr.php");
$us=$_GET['user'];
$q="DELETE  FROM registered WHERE usid='$us'  ";
$dt=mysqli_query($connec,$q);
if ($dt)
{
echo 'Record deleted';



}
else
{
echo 'Sorry delete process failed';
}
?>

