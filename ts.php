<?php
include("cr.php");
error_reporting(0);
$qw="SELECT * FROM train";
$reg=mysqli_query($connec,$qw);
$tt=mysqli_num_rows($reg);
?>
<table heigth=150>
<tr>
<th>Train no</th>
<th>Train Name</th>
<th>Source</th>
<th>Destination</th>
<th>Total Seat</th>
<th>Available Seat</th>
<th>route no</th>
</tr>
<?php
if ($tt!=0)
{
    while ($resul=mysqli_fetch_assoc($reg))
    {
        echo "  <tr>
        <td>".$resul['trainno']."</td>
        <td>".$resul['tname']."</td>
        <td>".$resul['source']."</td>
        <td>".$resul['destination']."</td>
        <td>".$resul['totalseat']."</td>
        <td>".$resul['availableseat']."</td>
        <td>".$resul['routeno']."</td>
        </tr>  ";
    }}
?>
</table>