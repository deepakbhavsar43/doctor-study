<?php
mysql_connect("localhost","root","");
mysql_select_db("sdoc");

$fname=$_POST['filename'];
$folder="upload/";

$folder=$folder.basename($_FILES['file']['name']);

$filename=$_FILES['file']['name'];
$filetype=$_FILES['file']['type'];

if($filetype=="application/pdf"){

$filetype=1;

}
elseif($filetype=="application/vnd.ms-powerpoint" ){
$filetype=2;
}
elseif($filetype=="application/msword" || "application/vnd.openxmlformats-officedocument.presentationml.presentation"){

$filetype=3;

}
elseif($filetype=="text/plain"){

$filetype=4;

}
else{
$filetype=5;
}

if(isset($_POST['submit'])){
move_uploaded_file($_FILES['file']['tmp_name'],$folder);

$q=mysql_query("insert into file(filename,name,path,type)values('$fname','$filename','$folder','$filetype')");
}
else{}

if($q==true){
echo "upload file::".$folder;
header("location:upload.php");
}
else{
echo "nottt";
}




?>