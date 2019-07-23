<?php
include("cr.php");
$usr=$_POST['uid'];
$pss=$_POST['Password'];
$qr="SELECT * FROM registered 
WHERE username='$usr' AND  pass='$pss' ";
$dtt=mysqli_query($connec,$qr);
$tot=mysqli_num_rows($dtt);
if ($tot==true)
{
    header("Location:redir.html");
}
else{
    echo "invalid user or pass";
    echo $usr;
    echo $pss;
}


?>

