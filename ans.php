<?php
session_start();
include("conn.php");

$date=date("y/m/d");
$uid=$_SESSION['uid'];
$ans=$_POST['ans'];
$uc=$_GET['pid'];


$q=mysql_query("insert into answer(post_id,uid,answer,date) values('$uc','$uid','$ans','$date')");

header("location:quans.php");
?>