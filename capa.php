<?php
$str=md5(microtime());
$str=substr($str,0,4);
session_start();
$_SESSION['cap']=$str;

$img=imagecreate(50,50);
imagecolorallocate($img,0,255,0);
$txtcolor=imagecolorallocate($img,0,0,0);

imagestring($img,25,10,10,$str,$txtcolor);
header('content:image/jpeg');
imagejpeg($img);
?>