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
	
	<form action="add_news.php" method="post" enctype="multipart/form-data">

		<input type="text" placeholder="title" name="title">

		<!-- <select name="category" id="">
			<option value="economic"></option>
			<option value="education"></option>
			<option value="entertainment"></option>
		</select> -->
		

		<input type="file" name="file">

		<textarea name="body" rows=10></textarea>

		<!-- <input type="checkbox" name="publish"> -->

		<input type="submit" value="add">
	</form>
</body>
</html>