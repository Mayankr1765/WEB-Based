<?php
$s="localhost";
$u="root";
$p="";
$db="railways";
$connec=mysqli_connect($s,$u,$p,$db);
 $cone=mysqli_select_db($connec,$db);

if ($connec)
{
echo 'Connection Established';
}
else
{
echo 'Connection failed';
}
?>