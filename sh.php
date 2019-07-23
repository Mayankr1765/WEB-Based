<?php
include("cr.php");


$tr=$_GET['train'];
$s=$_GET['sr'];
$d=$_GET['ds'];
$dj=$_GET['doj'];
$code="SELECT availableseat FROM train 
WHERE trainno='$tr' ";

$da=mysqli_query($connec,$code);
$w=mysqli_num_rows($da);
$a=mysqli_fetch_assoc($da);
if($w!=0)
{
    if ($a['availableseat']>0)
    {
        echo " Available Seat is:";
    echo $a['availableseat'];
    }
    else{
        echo "Waiting seat:";
        echo $a['availableseat'];

    }
    

}
else{
    echo " seat not available";
}
