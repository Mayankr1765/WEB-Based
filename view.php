<?php
include("cr.php");
include("pns.php");
$r=$pn;
$wq="SELECT * FROM passenger WHERE pnrno=$r ";
$cw=mysqli_query($connec,$wq);
$cwe=mysqli_fetch_assoc($cw);
$cwt=mysqli_num_rows($cw);
echo $cwt;
if ($cwt>0)
{
    echo $cew['pname'];
    echo " ";
    echo $cew['pgender'];
    echo " ";
    echo $cew['page'];
    echo " ";
    echo $cew['seatno'];
    echo " ";
    echo $cew['birth'];
    echo " ";
    echo $cew['pnrno'];
    
}
else{
    echo " NO SUCH PNR FOUND";
}
?>
