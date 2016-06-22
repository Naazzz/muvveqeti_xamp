<?php 
include "database.php";
$id=$_GET['id'];
$sql=" delete from news where id='$id'";
echo $sql;
$query=mysqli_query($connect,$sql);
header("Location: show_news.php");

 ?>