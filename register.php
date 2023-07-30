<?php
include("setting.php");
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$uid=$_POST['uid'];
$pas=$_POST['pass'];
if($name==NULL || $email==NULL ||   $phone==NULL || $uid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($conn,"INSERT INTO user(uid,name,phone,password,email) VALUES('$uid','$name','$phone','$pas','$email')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="User Already Exists";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VISUALIZATION OF DIGITAL CIRCUITS</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<img class="bg" src="main.jpg" alt="MINI" width="100%" height="650px">
<h1 class="a" align="center">VISUALIZATION OF DIGITAL CIRCUITS</h1>
<div class="box">
<h1>Register</h1>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Name : </td><td><input type="text" name="name" class="fields" placeholder="Enter Full name" required="required" size="20" /></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Enter Email ID" required="required" size="20" /></td></tr>
<tr><td class="labels">Phone no : </td><td><input type="phone" name="phone" class="fields" placeholder="Enter Phone no" required="required" size="20" /></td></tr>

<tr><td class="labels">USER ID : </td><td><input type="text" name="uid" class="fields" placeholder="Enter Student ID" required="required" size="20" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" placeholder="Enter Password" required="required" size="20" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Register" class="btn" /></td></tr>
</table>
</form><br />
<a href="login.php" class="goback">LOGIN</a>
</br>
<a href="index.html" class="goback">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>