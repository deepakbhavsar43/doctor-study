<?php 

include("conn.php");

$id=$_GET['id'];

$q=mysql_query("delete from friendlist where fid=$id");

header("location:frireq.php");
?>

