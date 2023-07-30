<?php
	session_start();
    include("setting.php");
	if(isset($_POST['pos']))
	{	$ids = $_SESSION['uid']; 
		$feed = $_POST['feed'];
		$query = "INSERT INTO feedback(feed,ids) VALUES('$feed','$ids')";
		$query_run = mysqli_query($conn,$query);
		
		if($query_run)
		{
			echo '<script type="text/javascript"> alert("posted successfully") </script>'; 

		}
		else
		{
			echo '<script type="text/javascript">alert("failed") </script>'; 
		}
	

	}	
?>
<?php
$uid=$_SESSION['uid'];
$a=mysqli_query($conn,"SELECT * FROM user WHERE uid='$uid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<img class="bg" src="main.jpg" alt="MINI">
    <div class="topnav">
      <a href="logout.php">Logout</a>
      <a href="update.php">Update</a>
      <a href="feedback.php">Feedback</a>
    </div>

<div class="box">
<form action="feedback.php" method="POST">
<h1>Post Feedback</h1>
		<div class="textarea">
			<textarea rows="5" cols="40" placeholder="type your feedback" name="feed" required></textarea>
		</div>
		<button class="btn" name="pos">post</button>
		
	</form>
</div>
</body>
</html>