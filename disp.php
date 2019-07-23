<?php
include("cr.php");
error_reporting(0);
$q="SELECT * FROM registered";
$data=mysqli_query($connec,$q);
$t=mysqli_num_rows($data);
?>
<table>
<tr>
<th>userid</th>
<th>pass</th>
<th>name</th>
<th>f.name</th>
<th>dob</th>
<th> gen </th>
<th>maritial status</th>
<th>occupation</th>
<th>aadhar no </th>
<th> email </th>
<th>adress</th>
<th> Delete  </th>
</tr>

<?php
if ($t!=0)
{
while ($result=mysqli_fetch_assoc($data))
{
echo "<tr>
<td>".$result['usid']."</td>
<td>".$result['pass']."</td>
<td>".$result['username']."</td>
<td>".$result['F.name']."</td>
<td>".$result['D.O.B']."</td>
<td>".$result['Gender']."</td>
<td>".$result['maritial status']."</td>
<td>".$result['occupation']."</td>
<td>".$result['Aadhar']."</td>
<td>".$result['e-mail']."</td>
<td>".$result['adress']."</td>
<td> <a href='del.php?user=$result[usid]' > Delete </a> </td>

</tr> ";
}}
?>

</table>
