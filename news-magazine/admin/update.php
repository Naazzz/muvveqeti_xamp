<?php 
include "database.php";
$id=$_POST["id"];
$title=$_POST["title"];
// $category=$_POST["category"];
$body=$_POST["body"];
// $checkbox=$_POST["publish"];

$file=$_FILES["file"];
$file_name=$file["name"];
$file_tmp=$file["tmp_name"];

	

$new_name=rand().".".substr($file_name, -3);


$sql="UPDATE `news` SET `title`='$title',`body`='$body' WHERE id='$id'";
echo $sql;
	$query=mysqli_query($connect,$sql);
	
	if($query){
	header('Location: show_news.php');
	}
	else
	echo "database not written";




 ?>