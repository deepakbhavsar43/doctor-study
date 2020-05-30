<?php
include("conn.php");
$un=$_POST['un'];
$cpwd=$_POST['cpwd'];
$rpwd=$_POST['rpwd'];
$npwd=$_POST['npwd'];

$q=mysql_query("select *form master where username=$un  and password=$cpwd");
if(!$q){
echo "user name are incorrect";
}
else
{
echo "change";
}


?>