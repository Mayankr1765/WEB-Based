<?php
//$id="admin";
//$pas="admin";
print_r($_POST);
if (isset($_POST['adid'])  &&  isset($_POST['adpass']))
{
if (($_POST['adid']=="admin")  && ($_POST['adpass']=="mark"))
{
header("Location:admin.html");
}
else
{
echo "wrong id ";
}}
?>