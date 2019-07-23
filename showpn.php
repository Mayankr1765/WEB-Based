<?php
include("cr.php");
$q="SELECT * FROM ticket";
$d=mysqli_query($connec,$q);

?>
<html>
    <head> <head>
        <body>
            <table>
                <tr>
                    <th>PNR NO </th>
                    <th> TRAIN NO </th>
                    <th>SOURCE </th>
                    <th>DESTINATION </th>
                    <th> DOJ</th>
</tr>
<?php
while($fet=mysqli_fetch_assoc($d))
{
    echo "<tr>
    <td>".$fet['pnrno']."</td>
    <td>".$fet['tno']."</td>
    <td>".$fet['ss']."</td>
    <td>".$fet['ds']."</td>
    <td>".$fet['dj']."</td>
    </tr> ";
}
?>
</table>