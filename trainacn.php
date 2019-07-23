<?php
include("cr.php");
$src=$_GET['frm'];
$des=$_GET['to'];
$count=0;
$r1=mysqli_query($connec,"SELECT * FROM rout WHERE stationname='$src'");
$r2=mysqli_query($connec,"SELECT * FROM rout WHERE stationname='$des'");
$r=mysqli_fetch_assoc($r1);

if(mysqli_num_rows($r1)==1 && mysqli_num_rows($r2)==1)
{
    echo "train no:";
 echo $r['trainno'];
 $count++;
}
 
 $r3=mysqli_query($connec,"SELECT * FROM rut WHERE stationname='$src'");
 $r4=mysqli_query($connec,"SELECT * FROM rut WHERE stationname='$des'");
 $re=mysqli_fetch_assoc($r3);
 
 if(mysqli_num_rows($r3)==1 && mysqli_num_rows($r4)==1)
 {
     echo "train no:";
     echo $re['trainno'];
     $count++;
 }
  
  if($count==0)
  echo "Train Not Found";
 




?>

