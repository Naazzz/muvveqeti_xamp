<?php

// 1. exerccise
echo "<h3>1.</h3>";
$records = [

[ 'id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe' ],

[ 'id' => 3245,'first_name' => 'Sally', 'last_name' => 'Smith' ],

[ 'id' => 5342, 'first_name' => 'Jane', 'last_name' => 'Jones' ],

[ 'id' => 5623, 'first_name' => 'Peter', 'last_name' => 'Doe' ]

];

$first_names = array_column($records,'first_name');
print_r($first_names);
var_dump($first_names);
// as you can see form the output of print_r(), array_column() return an array of the chosen key's value


// 2. exercise

// array_map funksiyasi arrayda olan her bir elementi tutalimki 1 funksiya iwledirikse onun icine parameter kimi gonderir ve daxilinde isdifade edir. 

//3.exercise
echo "<h3>3.</h3>";

$word = "Code Academy 2016";
$split_form=str_split($word);
$count=0;
foreach ($split_form as $value) {
	$count++;
}
echo "length of '".$word."' is: ".$count;

//4.exercise
echo "<h3>4.</h3>";

$arr=["shamil","rahim","nazrin","leyli","kerim"];
// $arr=[8,5,3,2];
$myArray=$arr;

sort($arr);


print_r($myArray);
echo ": verilen array";
echo "<br>";
print_r($arr);
echo ": sort olunan array";
echo "<br>";


for ($i=0; $i <count($myArray) ; $i++) { 

if ($myArray[$i]>$arr[$i]) {
	echo "this is azalma";
	break; // break ona goredirki, onsuzda ya azalma olmalidi ya artma, yeni sort olunmuw veziyyetde verilsin array bi zahmet
}
else if($myArray[$i]<$arr[$i]){
	echo "this is artma";
	break;
}
else {
	echo "bu vapshe heshne doyul";
	break;
}
}
// 5. exercise
//cox guman array_map dir

?>