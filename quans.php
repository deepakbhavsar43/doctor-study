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
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="menu">
<div class="cname1">Study docter</div>

<?php 
include("menu.html");
?>
</div>
<div style="clear:both">
<div class="main">
<div class="content">
<form action="qa.php" method="post">
<textarea type="text" name="que"  placeholder="write your Question">
</textarea>
<input type="submit" name="submit" value="submit" />
</form>



<?php
$q=mysql_query("select *from question order by date desc");
while($r=mysql_fetch_array($q)){
echo $r['que']."<br>"; 

$q1=mysql_query("select *from answer");

while($r1=mysql_fetch_array($q1)){
if($r1['post_id']==$r['id']){
echo "this is ans:".$r1['answer']."<br>";
}
}
?>

  <form action="ans.php?pid=<?php echo $r['id']; ?> " method="POST" >
<textarea type="text" name="ans"  placeholder="write your answer"></textarea>
<input type="submit"  value="submit" />
</form>
<?php 
}
?>
</div>
</div>

<div style="clear:both">
<div class="footer">
<?php 
include("footer.html");
?>
</div>
</body>
</html>
