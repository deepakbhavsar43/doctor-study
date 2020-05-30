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

<body><div class="menu">
<div class="cname1">Study docter</div>

<?php 
include("menu.html");
?>
</div>

<div class="main">
<div class="content">
<?php

$q=mysql_query("select *from master");
while($r=mysql_fetch_array($q)){
if($r['id']==$_SESSION['uid']){
}
else{
echo  $r['fname']."  ".$r['lname'];
}

$q1=mysql_query("select *from friendlist where uid=".$_SESSION['uid']." and f_id=".$r['id']);
$r1=mysql_fetch_array($q1);

	
	if($r['id']==$_SESSION['uid']){}
 
 else{					   				 
if(mysql_num_rows($q1)>0)
 {
 
					  
if($r1['accept']==1)
                     {
					   
					   
echo "<form action='fri.php?id=".$r['id']."' method='post'><input type='submit' value='friend' /></form>";
                        
						}
else{

echo  "<form action=''><input type='submit' value='friend request send' /></form>";
           }

}

else
{

echo "<form action='addfriend.php?id=".$r['id']." ' method='post'><input type='submit' value='Add friend' /></form>";


}
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
