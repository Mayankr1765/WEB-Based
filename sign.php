<!doctype html>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="sign.css">
</head>
<body>
<h1>Registeration Form </h1>
<form action="sm.php" method="GET" >
<div>
<table align="center">

<tr> <td> userid:</td><td><input type="text"  name="user" value=" "></td></tr>
<tr>  <td>password:</td><td><input type="password" name="pass" id="password" value=""></td></tr>
<tr> <td> confirm password:</td><td><input type="password" name="cpass" id="cpassword" value=""></td></tr>  
<tr> 
<td> Name:</td><td><input type="text"name="name" id="name" value=" "></td> </tr>
<tr>  <td>Father's Name:</td><td><input type="text"  name="fname" id="fname" value=" "></td> </tr>
<tr><td> D.O.B:</td><td><input type="date"  name="dob" value=" "></td> </tr>
<tr><td>gender:</td><td><input type="radio" value="male" name="gen">Male
                              <input type="radio" value="female" name="gen">Female </td></tr>
<tr> <td> Maritial status:</td> <td><input type="radio"  value="married" name="mar">Married
                                                <input type="radio" value="Bachelor" name="mar">Bachelor</td>
</tr>
<tr> <td>occupation:</td><td><select name="occ">
<option   value="student">Student</option>
<option  value="business">business</option>
<option  value="private">Private job</option>
<option   value="govt">goverment employee</option>
</select></td>
</tr>
<tr>  <td>Aadhar:</td><td><input type="number" name="adh" value=" "></td></tr>
<tr><td>E-mail:</td><td><input type="text" name="eml"  id="eml" value=" "></td></tr>
<tr><td>Adress:</td><td><input type="text" name="adr" value=" "></td></tr>
</table>
<input type="submit" name="submit" value="submit" onClick="validate()">
<input type="reset" value="reset">
</div
</form>
<script language="javascript">
function validate()
{
    var psc=/^(?=.*[0-9]){5,10}$/;
    var nmc=/^[A-Za-z. ]{3,30}$/;
    var fnc=/^[A-Za-z. ]{3,30}$/;
    var emc=/^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z]{3,30}$/;
    if (psc.test(password))
    {
        return true;
    }
    else{
        document.getElementById('password').innerHTML="** INVALID PASSWORD **";
        return false;
    }

}
</body>
</html>

