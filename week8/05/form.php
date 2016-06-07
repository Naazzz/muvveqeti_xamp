<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Hello</h1>
<a href="form.php?name=home">home page</a>
<a href="form.php?name=work">work page</a>


<?php

// post iwleme
/*
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
echo "$ad $soyad xow gelibsiniz";*/

// get iwleme
/*
$uni=$_GET["uni"];
$mekteb=$_GET["mekteb"];
echo "$uni $mekteb xow gelibsiniz";*/

/*$id=$_GET["name"];
if($id=="home"){
	echo "<hr>";
	echo "bu ana sehifedir";
} else if ($id=="work"){
	echo "<hr>";
	echo "bu work sehifedir";
}else{
	echo "<hr>";
	echo "bu bawqa sehifedir";
}*/

$olke=$_GET["olke"];
if($olke=="az"){
	echo "<hr>";
	echo "$olke olkesinin 3 weheri : Baki gence sumqayit";
} 
else if ($olke=="tur"){
	echo "<hr>";
	echo "$olke olkesinin 3 weheri : turk gence sumqayit";
}
else if($olke=="pak"){
	echo "<hr>";
	echo "$olke olkesinin 3 weheri : pakistan gence sumqayit";
}


?>

</body>
</html>