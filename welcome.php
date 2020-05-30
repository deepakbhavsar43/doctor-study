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
<div style="clear:both">
<div class="main">
<div class="content">
<h1>welcome</h1>
<?php 

echo $_SESSION['name'];

?>

</div>
</div>
<div class="footer">
<?php
include("footer.html");

?>
</div>

</body>
</html>
