<?php
$username=$_POST["name"];
$password=$_POST["pwd"];

if(isset($username) && isset($password)){
	if(empty($password)|| empty($username)){
		header("Location: index.php");
	}
	else{
		if($username=="Admin" && $password=="Admin"){
			session_start();
			$_SESSION["duzAd"]=$username;
			$_SESSION["duzPwd"]=$password;
			header("Location: admin/admin.php");
		}
		else{
			header("Location: index.php");
		}
	}
}
else {
	echo "<br>this parameter are not exist";
}

?>
