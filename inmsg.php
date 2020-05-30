<?php
include("conn.php");
session_start();
$sid=$_SESSION['uid'];
$rid=$_GET['id'];
$msg=$_POST['msg'];
$q=mysql_query("insert into message(sid,rid,message)values('$sid','$rid','$msg')");
header("location:msg.php?id=".$rid);
?>