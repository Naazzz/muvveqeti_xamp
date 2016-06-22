<?php 
$host="localhost";
$username="root";
$password="";
$database="news";

$connect=mysqli_connect($host,$username,$password,$database);
if($connect){
	// echo "connection is sucsesful";
}
else
	echo "connection failed";

 ?>