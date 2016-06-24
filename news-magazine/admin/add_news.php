<?php 
include "database.php";
$title=$_POST["title"];
// $category=$_POST["category"];
$body=$_POST["body"];
// $checkbox=$_POST["publish"];

$file=$_FILES["file"];
$file_name=$file["name"];
$file_tmp=$file["tmp_name"];

	

$new_name=rand().".".substr($file_name, -3);

//var_dump(move_uploaded_file( $file_tmp, "../images/$new_name"));
	echo "<br>";

	$bool=move_uploaded_file($file_tmp, "../images/$new_name");

	move_uploaded_file($file_tmp, "../images/$new_name");
	if($bool){
		$sql="insert into news(title,img,body) values('$title','$new_name','$body')";
		$query=mysqli_query($connect,$sql);
		if($query){
			header("Location: show_news.php");
		}
		else
			echo "database is not written";

	}
	else {
		echo "falseee";
	}

// if( move_uploaded_file($file_tmp, "../images/$new_name") ) {


// 	$sql="insert into news(title,img,body,date) values('$title','../images/$new_name','$body','')";
// 	$query=mysqli_query($connect,$sql);
	
// 	if($query){
// 	header('Location: show_news.php');
// 	}
// 	else
// 	echo "database not written";
// }
	
// else
// 	echo "false";



 ?>