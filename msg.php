<?php 
session_start();
include("conn.php");

if(isset($_SESSION['name']))
{
}
else
{
header("location:home.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<div class="menu">
<div class="cname1">Study docter</div>

<?php 
include("menu.html");
?>
</div>
<div class="main">
<div class="content">
<div class="col">
<div class="cols20per">
<h1>friendlist</h1>
<?php 
$q=mysql_query("select *from master as a inner join friendlist  as b  on a.id=b.uid where f_id=".$_SESSION['uid']);
while($r=mysql_fetch_array($q)){
echo "<a href='msg.php?id=".$r['id']."'>".$r['fname']." ".$r['lname']."<br>"."</a>";
$q1=mysql_query("select *from friendlist uid=".$_SESSION['uid']." and f_id=".$r['id']);
}
?>
</div>
<div class="col5per">&nbsp;</div>
<div class="col70per" style="overflow:scroll;" >
<h1 style="margin-top:-1px">message</h1>

<?php
$q2=mysql_query("select *from master where id=".$_GET['id']);
$r1=mysql_fetch_array($q2);

echo $r1['fname']." ".$r1['lname'];


?>

<?php

if(isset($_GET['id']))
{
?>

<form action="inmsg.php?id=<?php echo $_GET['id']; ?>" method="post">

<?php
}
?>
<table>
<div class="row">
<ul>
    <?php
 
//$q5= mysql_query("select * from message where (sid=".$_GET['id']." and	 rid=".$_SESSION['uid'].") or( sid=".$_SESSION['uid']." and	 rid=".$_GET['id'].")");
 
$q5=mysql_query("select *from message where (sid=".$_GET['id']." and    rid= ".$_SESSION['uid'].") or (sid=".$_SESSION['uid']." and   rid=".$_GET['id'].")");

while($r5=mysql_fetch_array($q5)){

if($_SESSION['uid']==$r5['sid']){

echo "<li style='display:block' >".$r5['message']."</li>";
}
else{
echo "<li style='display:block; text-align:right'>".$r5['message']."</li>";
}
}
?>
</ul>
</div>
</table>
<textarea name="msg" ></textarea>
<input type="submit" name="send" value="send" />
</form>
</div>
</div>
</div>
</div>
<div class="footer">
<?php 
include("footer.html");
?>
</div>
</body>
</html>
