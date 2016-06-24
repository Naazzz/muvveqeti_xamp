<?php 
include "database.php";
$id=$_GET["id"];
$sql="SELECT * from news where id=$id";
$query=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($query);


 ?>


<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		input, textarea{
			margin: 10px;
			display: block;
			padding: 10px;
			width: 500px;
		}

	</style>
</head>
<body>
	
	<form action="update.php" method="post" enctype="multipart/form-data">

		<input type="text" value="<?php echo $row['title'] ?>" placeholder="title" name="title">

		
		

		<input type="file" name="file">

		<textarea name="body" value="<?php echo $row['body'] ?>" rows=10></textarea>

		
<input type="hidden" value="<?php echo $id ?>" name="id">
		<input type="submit" value="add">
	</form>
</body>
</html>

