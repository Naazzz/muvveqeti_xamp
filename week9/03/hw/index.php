
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="qutucuq">
	<div class="green">
		<h1><b>Login<b></h1>

		<div id="wrong">
			<span>Please fill in a username and password</span>
		</div>

		<form action="check.php" method="post" accept-charset="utf-8" class="form">
			<p>Username:</p>
			<input type="text" name="name">
			<p>Pasword:</p>
			<input type="password" name="pwd">
			<input type="submit" value="Login!" class="submit" onclick="myfunc()">
		</form>
	</div>

	<div class="comment">
		<div class="tri"></div>
		<div class="rect">
			<h4>This is a demo<br></h4>

			<h4>Username<br> Admin<br></h4>

			<h4>Password<br>Admin</h4>
		</div>
	</div>
</div>
<script>
function myfunc(){
	document.getElementById("wrong").style.display="block";
}
</script>
</body>
</html>