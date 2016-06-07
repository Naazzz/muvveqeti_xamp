<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		td{
			padding:10px;
			border:2px solid red;
		}
	</style>
</head>
<body>
<?php
/*$heci=" hehehhe ";
$mesehdi=" uhahah";
echo "$heci $mesehdi";
echo "\$heci: $mesehdi"."dir..." ;*/

$arr3=[
"ad"=>["naz","rah","xan"],
"soyad"=>["xanova","haqverdi","baba"],
"yas"=>[15,12,32]
];

$arr4=[
"o_qiz"=>["nazrin","xanova",20],
"oadam"=>["baba","ata",40],
"sen"=>["kim","men",4]
];
?>

<table border="1" style="width:40%">
  <tr>
    <td>ad</td>
    <td>soyad</td> 
    <td>yas</td>
  </tr>
  <tr>
    <td><?php echo $arr3["ad"][0]?></td>
    <td><?php echo $arr3["soyad"][0]?></td> 
    <td><?php echo $arr3["yas"][0]?></td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table >


<?php

echo "<table>";
for ($i=0; $i < count($arr3["ad"]); $i++) { 
	echo "<tr>";
		echo "<td>".$arr3["ad"][$i]."</td>";
		echo "<td>".$arr3["soyad"][$i]."</td>";
		echo "<td>".$arr3["yas"][$i]."</td>";
	echo "</tr>";
}
echo "</table>";



echo "<table>";
for ($i=0; $i < count($arr3["ad"]); $i++) { 
	echo "<tr>";
	foreach ($arr3 as $key => $value) {
		echo "<td>".$value[$i]."</td>";
		}
	echo "</tr>";
}
echo "</table>";


echo "<table>";
foreach ($arr4 as $key => $value) {
	echo "<tr>";
for ($i=0; $i < count($arr4["sen"]); $i++) { 
	echo "<td>".$value[$i]."</td>";
	}
	echo "<tr>";
}
echo "</table>";
?>
<!-- post ileme -->

<!-- <form action="form.php" method="post">
<input type="text" name="ad" placeholder="adinizi daxil ederdiniz">
<input type="text" name="soyad" placeholder="soyadinizi daxil ederdiniz">
<input type="submit" name="gonder">
</form> -->

<!-- get iwleme -->

<!-- <form action="form.php" method="get">
<input type="text" name="uni" placeholder="uni daxil ederdiniz">
<input type="text" name="mekteb" placeholder="mekteb daxil ederdiniz">
<input type="submit" value="send"> -->

<form action="form.php" method="get">
	<select name="olke">
	  <option value="az">Azerbaycan</option>
	  <option value="tur">Turkiye</option>
	  <option value="pak">Pakistan</option>
	</select>
	<input type="submit">

</form>


</form>
</body>
</html>