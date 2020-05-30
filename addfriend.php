<?php
session_start();
include("conn.php");

$id=$_SESSION['uid'];
$fid=$_GET['id'];

$q=mysql_query("insert into friendlist(uid,f_id,accept)values($id,$fid,'false')");




$q1=mysql_query("insert into friendlist(uid,f_id,accept)values('$fid','$id',1)");




header("location:friendlist.php");
?>

