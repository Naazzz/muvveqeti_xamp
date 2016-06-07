<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$arr=["Leyli","Kerim","Rehim","Shamil","Nazrin"];
$arr2=["ad"=>"Nazrin", "soyad"=>"Dolkhanova","film"=>"Inception"];

sort($arr);
rsort($arr);

$length=count($arr);
for ($i=0; $i < $length ; $i++) { 
	echo $arr[$i];
	echo "<br>";
}
echo "asort ";
asort($arr2);
print_r($arr2);
echo "<br>";
echo "ksort ";
ksort($arr2);
print_r($arr2);
echo "<br>";
echo "arsort ";
arsort($arr2);
print_r($arr2);
echo "<br>";
echo "krsort ";
krsort($arr2);
print_r($arr2);


/*foreach ($arr2 as $key => $value) {
	echo $key." ".$value." ";
}*/

?>
</body>
</html>