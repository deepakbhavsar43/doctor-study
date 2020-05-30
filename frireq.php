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
<?php
 
$q=mysql_query("select *from master as a inner join friendlist as b on a.id=b.uid where f_id=".$_SESSION['uid']);
while($r=mysql_fetch_array($q))
{

echo $r['fname']."  ".$r['lname'];

if($r['accept']==false){
echo "<form action='accreq.php?id=".$r['fid']." ' method='post'><input type='submit' value='accept'></form>";



echo "<form action='delreq.php?id=".$r['fid']." ' method='post'><input type='submit' value='cancel'></form>";

}

else
{
echo "<form action='delreq.php?id=".$r['fid']." ' method='post'><input type='submit' value='delete'></form>";
}
}
?>
</div>
</div>
<div class="footer">
<?php 
include("footer.html");
?>
</body>
</html>
