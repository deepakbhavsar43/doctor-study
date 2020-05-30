<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function validateform()
{
var a=document.forms["registration"]["pwd"].value;
var b=document.forms["registration"]["cpwd"].value;
var f=document.forms["registration"]["fn"];
var l=document.forms["registration"]["ln"];
var m=document.forms["registration"]["un"];

var c=document.forms["registration"]["cn"];

if(a!=b)
{
alert("password must be same");
return false;
}
else
{

}



if(isNaN(f.value))
{
}
else
{
alert("first name must be string");
return false;
}


if(isNaN(m.value))
{
}
else
{
alert("middle name must be string");
return false;
}



if(isNaN(l.value))
{
}
else
{
alert("user name must be string");
return false;
}


	if(isNaN(c.value))
	{
	alert("mobile no contain only 10 digit");
	return false;
	}
	else
	{
		if(c.value.length!=10)
		{
		alert("only 10 digit allow");
		return false;
		}
		else
		{
		return true;
		}
	}
}
</script>
</head>

<body>
<div class="main">
<?php
include('logheader.php');
?>

<div class="content">

<form name="registration"  method="post" onsubmit="return validateform()" action="reg.php" >
  <div class="row">
    <div class="col20per">Name</div>
    <div class="col75per">
      <input type="text" placeholder="First Name"  name="fn" required/>
      <input type="text" placeholder="Last Name"  name="ln" required/>
    </div>
  </div>
  <div class="row">
    <div class="col20per">User Name</div>
    <div class="col75per">
      <input type="text" placeholder="User Name"  name="un" required/>
    </div>
  </div>
  <div class="row">
    <div class="col20per">Password</div>
    <div class="col75per">
      <input type="password" placeholder="Password"  name="pwd" required/>
    </div>
  </div>
  <div class="row">
    <div class="col20per">Re-Password</div>
    <div class="col75per">
      <input type="password" placeholder="re-Password"  name="cpwd" required/>
    </div>
  </div>
  <div class="row">
    <div class="col20per">Gender</div>
    <div class="col75per">
      <input type="radio"  name="gender"  value="male" required/>male
      <input type="radio"  name="gender"  value="female" required/>female
    </div>
  </div>

  <div class="row">
    <div class="col20per">Email</div>
    <div class="col75per">
      <input type="email" placeholder="Email"  name="em" required/>
    </div>
  </div>
  <div class="row">
    <div class="col20per">Contact No</div>
    <div class="col75per">
      <input type="text" placeholder="mobile no"   name="cn" required/>
    </div>
  </div>
   <div class="row">
    <div class="col20per"></div>
    <div class="col75per">
      <input type="text" placeholder="enter code" name="capt" required/><img src="capa.php" />
    </div>
  </div>
  <div class="row">
    <div class="col20per">&nbsp;</div>
    <div class="col75per">
      <input type="submit" value="Save" />
    </div>
  </div>
  </div>
  </form>
  <?php 
  include("footer.html");
  ?>
</body>
</html>
