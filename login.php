<?php
include("setting.php");
session_start();
if(isset($_SESSION['uid']))
{
	header("location:main.html");
}
$uid=$_POST['uid'];
$pas=$_POST['pass'];
if($uid==NULL || $pas==NULL)
{
	//
}
else
{
	$sql=mysqli_query($conn,"SELECT * FROM user WHERE uid='$uid' AND password='$pas'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['uid']=$_POST['uid'];
		header("location:main.html");
	}
	else
	{
		$msg="Incorrect Details";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>VISUALIZATION OF DIGITAL CIRCUITS</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<img class="bg" src="main.jpg" alt="MINI" width="100%" height="650px">
<h1 class="a" align="center">VISUALIZATION OF DIGITAL CIRCUITS</h1>
<form method="post">
		<div class="box">
			<h1>Login</h1>
			<div class="msg" align="center"><?php echo $msg;?></div>
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Enter id"
						name="uid" value="" required="required">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Enter Password"
						name="pass" value="" required="required">
			</div>
	
			<input class="btn" type="submit"
					name="login" value="Sign In">
					<br />
<br />
<a href="index.html" class="goback">Go Back</a>
		</form>
		</div>
</form>
</body>
</html>

