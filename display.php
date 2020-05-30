<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sdoc");

$q=mysql_query("select *from file");
while($r=mysql_fetch_array($q)){
$fname=$r['name'];
$name=$r['filename'];
$path=$r['path'];
$id=$r['id'];
$filetype=$r['type'];
$fname=substr($fname,0,10);
if($filetype==1){


echo "<div class='resp'>";
echo "<div class='fileshow'>";
echo '<img src="pdflogo.png">';
echo "<a href='$r[path]'>download</a>";
echo "<div class='name'>".$fname."</div>"."</div>"."</div>";

}
elseif($filetype==2){

echo "<div class='resp'>";
echo "<div class='fileshow'>";
echo '<img src="ppt.png" width=200px height=200px>';
echo "<a href='$r[path]'>download</a>";
echo "<div class='name'>".$fname."</div>"."</div>"."</div>";
}
elseif($filetype==3){
echo "<div class='resp'>";
echo "<div class='fileshow'>";

echo '<img src="doc.jpg" width=200px height=200px>';
echo "<a href='$r[path]'>download</a>";
echo "<div class='name'>".$fname."</div>"."</div>"."</div>";
}
elseif($filetype==4){
echo "<div class='resp'>";
echo "<div class='fileshow'>";
echo '<img src="text-file.png" width=200px height=200px>';
echo "<a href='$r[path]'>download</a>";
echo "<div class='name'>".$fname."</div>"."</div>"."</div>";
}
else{
echo "<div class='resp'>";
echo "<div class='fileshow'>";

echo '<img src="'.$path.'" width=200px height=200px>';
echo "<a href='$r[path]'>download</a>";
echo "<div class='name'>".$fname."</div>"."</div>"."</div>";;
}
}
?>

</body>
</html>
