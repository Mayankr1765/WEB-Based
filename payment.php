<?php
session_start();
?>

<!doctype html>
<head>
        <link rel="stylesheet" type="text/css" href="pay.css">
</head>
<body>

</body>
<h1> Payment Details</h1>
<form action="pay.php" method="POST">
    <div>
    <table>
        <tr> 
            <td>Card No:</td>
            <td> <input type="text" name="cn"> </td>
            <td>Name On Card</td>
            <td> <input type="text" name="namec"></td><br>
            <td> Date Of Expiry:</td>
            <td> <input type="date" name="ed"></td><br>
            <td> Enter O.T.P</td>
            <td> <input type="text" name="otp"></td><br>
            <td> <input type="submit" name="smt"><td>
            </td>
            </tr>
        </table>
        </div>
</form>
</body></html>

