<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="seat.css">
</head>
<body>
<h2 margin:top="20 px"> Seat Availability </h2>
<form action="sh.php" method="GET">
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