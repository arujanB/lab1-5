<!DOCTYPE html>
<html>
<head>
	<title>Lab1</title>
</head>
<body>
<?php 

//ex1:
/*$x = 81;

function test(){
	echo $x+8;
}

test();
echo $x;*/

//ex2
// function test2(){
// 	$x2 = 4;
// 	echo $x2 + 8;
// }

// test2();
// echo $x2;

//ex3
// $x3 = "123456789";

// function test3(){
// 	global $x3;
// 	echo strrev ($x3);
// }

// test3();

//ex4

function test4($num){
	for($n = 1; $n <= str_word_count($num); $n++){
		if($num = 1){
			echo "1 2 3 4";
		}else if($num = 2){
			echo "2 1 3 4";
		}else if($num = 4){
			echo "4 2 3 1";
		}else if($num = 3){
			echo "3 1 4 2";
		}
	}
}

test4("бир еки уш торт");
echo "<br>";
test4("еки бир уш торт");
echo "<br>";
test4("торт еки уш бир");
echo "<br>";
test4("уш бир торт еки");
?>
</body>
</html>
