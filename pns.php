<?php
include("cr.php");
$pn=$_GET['pnr'];
$gp="SELECT * FROM ticket WHERE pnrno=$pn";
$gpe=mysqli_query($connec,$gp);
$toot=mysqli_num_rows($gpe);
$rs=mysqli_fetch_assoc($gpe);
    if ($toot==1)
    {
        echo $rs['pnrno'];
        echo " ";
        echo $rs['tno'];
        echo " ";
        echo $rs['ss'];
        echo " ";
        echo $rs['ds'];
        echo " ";
        echo $rs['dj'];
        echo " ";
        
    }
    else{
        echo "not found";
    }
?>
