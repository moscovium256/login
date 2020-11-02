<?php
$username = base64_decode($_GET["username"]);
$password = base64_decode($_GET["password"]);
if (isset($_POST['send'])) {
	header("location: ../");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $username;?> - account</title>
</head>
<body>
<div>
		<div>
			<h1 class="head">Login</h1>
			<form method="POST" autocomplete="off">
				<i class="fa-lock">username : <?php echo $username;?></i><br>
				<i class="fa-lock">password : <?php echo $password;?></i><br>
				<p class="errer"><?php echo $errer;?></p><br>
				<input type="submit" value="Dissconect" name="send"><br>
			</form>
		</div>
	</div>
</body>
</html>
<style type="text/css">
	body{
		background-image: linear-gradient(to top left, #C7005D 30%, #280859 60%);
		height: 100vh;
		margin: 0;
		font-family: monospace;
		color: snow;
	}
	.errer{
		color: rgb(200,200,10);
		margin-top: -1px;
		margin-bottom: -1px;
		margin-left: 10px;
	}
	h1.head{
		font-size: 40px;
		margin-top: 100px;
		text-align: center;
	}
	form{
		background: rgba(255,255,255,0.2);
		width: 40%;
		border: 2px solid black;
		border-radius: 5px;
		padding: 20px;
		margin-left:28%;
	}
	i{
		font-size: 17px;
	}
</style>