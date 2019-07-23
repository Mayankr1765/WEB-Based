<?php
session_start();
?>

<?php
include("cr.php");
error_reporting(0);


$tr=$_POST['train'];
$s=$_POST['sr'];
$d=$_POST['ds'];
$dj=$_POST['doj'];
$s1= "SELECT stationno FROM rout WHERE stationname='$s' ";
$s2="SELECT stationno FROM rout WHERE stationname='$d' ";
$sr1=mysqli_query($connec,$s1);
$sr2=mysqli_query($connec,$s2);
$s3="SELECT stationno FROM rut WHERE stationname='$s' ";
$s4="SELECT stationno FROM rut WHERE stationname='$d' ";
$sr3=mysqli_query($connec,$s3);
$sr4=mysqli_query($connec,$s4);


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
 if (mysqli_num_rows($sr3)>0)
 {
     $z=mysqli_fetch_assoc($sr3);
 }
 if (mysqli_num_rows($sr4)>0)
 {
     $z1=mysqli_fetch_assoc($sr4);
 }


$fare1=($srrr["stationno"]-$srr["stationno"])*100;
if($fare1<0)
{
    $fare1=-$fare1;
}
$fare2=($z1["stationno"]-$z["stationno"])*100;
if($fare2<0)
{
    $fare2=-$fare2;
}
if ($fare1>$fare2)
{
    $fare=$fare1;
}
else{
    $fare=$fare2;
}




$code="SELECT * FROM train 
WHERE trainno='$tr' ";

$da=mysqli_query($connec,$code);
$w=mysqli_num_rows($da);
$a=mysqli_fetch_assoc($da);
if($w!=0)
{
    $qwe="INSERT INTO TICKET VALUES(DEFAULT,'$tr','$s','$d','$dj')";
    $qq=mysqli_query($connec,$qwe);
    $_SESSION['fr']= $fare;
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



<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="seat.css">
</head>
<body>
<h2 margin:top="20 px"> Seat Availability </h2>
<form  method="POST">
<div>

<table align="center">

<tr> <td>Train no:</td> <td><input type="number" name="train"></td></tr>
<tr> <td>From Station:</td> <td><input type="text" name="sr" ></td></tr>
<tr> <td>To Station:</td> <td><input type="text" name="ds"></td></tr>
<tr> <td> Journey date:</td> <td><input type="date"  name="doj"value=""></td></tr>
</table>
<input type="submit" value="Check availability" >

</div>
</form>
</body>
</html>

