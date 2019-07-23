<?php
include("cr.php");
session_start();

$tr=$_GET['train'];
$s=$_GET['sr'];
$d=$_GET['ds'];
$dj=$_GET['doj'];
$s1= "SELECT stationno FROM rout WHERE stationname='$s' ";
$s2="SELECT stationno FROM rout WHERE stationname='$d' ";
$sr1=mysqli_query($connec,$s1);
$sr2=mysqli_query($connec,$s2);
if(mysqli_num_rows($sr1)>0)
 {
    $srr=mysqli_fetch_assoc($sr1);
    echo $srr["stationno"];
 }

 if(mysqli_num_rows($sr2)>0)
 {
    $srrr=mysqli_fetch_assoc($sr2);
    echo $srrr["stationno"];
 }


$fare=($srrr["stationno"]-$srr["stationno"])*100;




$code="SELECT * FROM train 
WHERE trainno='$tr' ";

$da=mysqli_query($connec,$code);
$w=mysqli_num_rows($da);
$a=mysqli_fetch_assoc($da);
if($w!=0)
{
    $qwe="INSERT INTO TICKET VALUES(DEFAULT,'$tr','$s','$d','$dj')";
    $qq=mysqli_query($connec,$qwe);
    $_SESSION['fr']= $_GET['train'];
    echo $fare;
    header("Location:Booked_Ticket2.php");
    

}
else
{
    echo "Seat not available";

}
/*while($w=mysqli_fetch_assoc($da));
{
    echo $w['totalseat'];
}*/
?>


