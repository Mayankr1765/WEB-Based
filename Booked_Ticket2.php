<?php
session_start();
?>
s
<html>
    <head>
        <title>

        </title>
        <style>
        body{
    background-image:url("813151.jpg");
     height: 100%; 
    
        margin-top:50px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    form
    {
    float:right; 
    margin-right: 30px;
    padding: 20px;
    height:auto;
    width:auto;
    background-color:darkgrey;
    border-radius: 30px;
    
     
    
    }
    .mar{
        padding: 20px;
    }
    
</style>    
    
    
    </head>
    <body>
        <h2>
            Passengers Details
        </h2>
        <form action="payment.php" method="POST">
            <table>
                
                    <tr>
                            <td>
                                Name:
                            </td>
                            <td>
                                    <input type="text" name="name1" >
                            </td>
                        
                    <td class="mar">
                        Gender:
                    </td>
                    <td>
                            <input type="radio" name="gender" value="Male" id="gender">Male
                            <input type="radio" name="gender" value="Female" id="gender">Female
                            <input type="radio" name="gender" value="Other" id="gender">Other
                    </td>
           
                    <td class="mar">
                        Age:
                    </td>
                    <td>
                            <input type="number" name="age" >
                    </td>
                    <td class="mar">
                        Class:
                    </td>
                    <td>
                            <select name="class">
                                <option value="sleeper" >Sleeper</option>
                                <option value="AC III" >AC III</option>
                                <option value="AC II" >AC II</option>
                                <option value="AC I" >AC I</option>
                            </select>
                    </td>
                   <td class="mar">
                        Birth Preference
                    </td>
                    <td>
                            <select name="bp1">
                                <option value="lower" >Lower</option>
                                <option value="middle" >Middle</option>
                                <option value="upper" >Upper</option>
                                <option value="side_lower" >Side Lower</option>
                                <option value="side_upper" >Side Upper</option>
                            </select>
                    </td>
            </tr>
            <tr>
                    <td>
                        Name2:
                    </td>
                    <td>
                            <input type="text" name="name2" >
                    </td>
                
            <td class="mar">
                Gender2:
            </td>
            <td>
                    <input type="radio" name="gen" value="Male" id="gen">Male
                    <input type="radio" name="gen" value="Female" id="gen">Female
                    <input type="radio" name="gen" value="Other" id="gen">Other
            </td>
   
            <td class="mar">
                Age2:
            </td>
            <td>
                    <input type="number" name="ag" >
            </td>
            <td class="mar">
                Class:
            </td>
            <td>
                    <select name="class">
                        <option value="sleeper" >Sleeper</option>
                        <option value="AC III" >AC III</option>
                        <option value="AC II" >AC II</option>
                        <option value="AC I" >AC I</option>
                    </select>
            </td>
           <td class="mar">
                Birth Preference
            </td>
            <td>
                    <select name="bp2">
                        <option value="lower" >Lower</option>
                        <option value="middle" >Middle</option>
                        <option value="upper" >Upper</option>
                        <option value="side_lower" >Side Lower</option>
                        <option value="side_upper" >Side Upper</option>
                    </select>
            </td>
    </tr>
   

           
        </table>
        <p>
            <span><input type="reset"></span>
            <span><input type="submit" name="sub"></span>
        </p>
        </form>
    </body>
</html>
<?php




include("cr.php");
error_reporting(0);

echo "hello";
echo $_SESSION['fr'];
$n1=$_POST['name1'];
$g1=$_POST['gender'];
$a1=$_POST['age'];
$b1=$_POST['bp1'];
$n2=$_POST['name2'];
$g2=$_POST['gen'];
$a2=$_POST['ag'];
$b2=$_POST['bp2'];
$z="SELECT MAX(pnrno) FROM ticket";
if ($_POST['sub'])
{
    $qe="INSERT INTO passenger VALUES('$n1','$g1','$a1',DEFAULT,'$b1','$z')";
    $qe2="INSERT INTO passenger VALUES('$n2','$g2','$a2',DEFAULT,'$b2','$z')";
    $d1=mysqli_query($connec,$qe);
    $d2=mysqli_query($connec,$qe2);
    header("Location:payment.php");
}



?>
