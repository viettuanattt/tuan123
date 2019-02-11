<?php
$array = [3, 4, 5, "abc" , "xyz"];
/*echo $array[9];
var_dump($array[3]);
sizeof($array);
count($array);
*/
for ($i = 0; $i < count($array); $i++) {
	var_dump($array[$i]);
}
$start = 0;
while ($start < count($array)) {
	echo "Gia tri mang o vi tri" . $start . " 
	= " . $array[$start];
	echo"<br>";
	$start++;
}
$posts = [
"title" => " Tieu de bai viet",
"content" => " Noi dung bai viet"
];
var_dump($posts["title"]);
?>