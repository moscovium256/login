<?php
$errer = "";

if (isset($_POST["send"])) {
	if (!empty($_POST["username"])) {
		if (!empty($_POST["password"])) {
			$username = htmlspecialchars($_POST["username"]);
			$password = htmlspecialchars($_POST["password"]);
			if (md5($username) == "21232f297a57a5a743894a0e4a801fc3" && md5($password) == "21232f297a57a5a743894a0e4a801fc3") {
				header("location: ./login.php?username='". base64_encode($username)."'&password='". base64_encode($password)."'");
				$errer = "good !";
			}else{
				$errer = "fail password";
			}
			if (md5($username) == "2c1743a391305fbf367df8e4f069f9f9" && md5($password) == "21232f297a57a5a743894a0e4a801fc3") {
				header("location: ./login.php?username='". base64_encode($username)."'&password='". base64_encode($password)."'");
			}else{
				$errer = "fail password";
			}

		}else{
			$errer = "password required !";
		}
	}else{
		$errer = "username required !";
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">

</head>
<body>
	<div>
		<div>
			<h1 class="head">Login</h1>
			<form method="POST" autocomplete="off">
				<i class="fa-lock">username : </i><br>
				<input type="text" name="username"><br>
				<i class="fa-lock">password : </i><br>
				<input type="password" name="password"><br>
				<p class="errer"><?php echo $errer;?></p><br>
				<input type="submit" value="LOGIN" name="send"><br>
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
	input[type="text"],input[type="password"]{
		width: 60%;
		padding: 10px 30px;
		background: rgba(0,0,0,0.2);
		border: 2px solid snow;
		margin-bottom: 10px;
		transition: all 0.2s;
	}
	input[type="text"]:focus,input[type="password"]:focus{
		padding: 10px 40px;
		border: 2px solid black;
	}
	input[type="submit"]{
		width: 72%;
		border: 2px solid snow;
		padding: 10px;
		background: rgba(0,0,0,0.2);
		transition: all 0.2s;
	}
	input[type="submit"]:hover{
		width: 75%;
		border: 2px solid black;
		background: rgba(0,0,0,0.4);
	}

	i{
		font-size: 17px;
	}
</style>