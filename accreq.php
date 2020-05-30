<?php
include("conn.php");

$id=$_SESSION['uid'];

$r=$_GET['id'];

//$q1=mysql_query("insert into friendlist(uid,f_id,accept)values('$r','$id',1)");

 $q=mysql_query("update friendlist set accept='1' where fid='$r'");

 
 header("location:frireq.php");
?>
