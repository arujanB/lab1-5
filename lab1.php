<!DOCTYPE html>
<html>
<head>
	<title>lab1 task</title>
</head>
<body>
	<?php
	//ex1
	$a = 192;
	function print_variable(){
		$a = 55;//бул тек озине тиесили
	}
	print_variable();//бул жерде осы функцияны шакырып тур бирак ишинде echo жок оныны ишиндегисин шыгармайды.
	echo $a;
	echo "<br>";// Жауабы $a = 192 шыгады.Бул жерде global колданганда а = 55 ауысатын еди.

	//ex2
	$a = 19;
	function print_varaible(){
		global $a; // а = 19
		$a = 102;
	}
	print_varaible();
	echo $a;
	echo "<br>";//жауабы: 102 шыгады. Ойткени биз бул жерде global колданып жатырмыз.Ал ол сырта а = 19 тен болса, функциянын ишинде сол global созин пайдаланганнан сон а = 102 дегенге ауысыд.Функция сыртында да а = 102 тен болад.

	//ex3
	echo strlen("Maksat");// Жауабы:6
	echo "<br>";
	//ex4
	function test4($num, $num1,$num2,$num3){
		// $num = "бир";
		// $num1 = "еки";
		// $num2 = "уш";
		// $num3 = "торт";
		// return 
		if($num == "бир еки уш торт"){
			return '1,2,3,4';
		}elseif ($num == "еки бир уш торт") {
			return '2,1,3,4';
		}elseif ($num == "торт еки уш бир") {
			return '4,2,3,1';
		}elseif ($num == "уш бир торт еки") {
			return '3,1,4,2';
		}

		
	}

	// echo test4("бир", "еки", "уш", "торт");
	// echo "<br>";
	// echo test4("еки", "бир", "уш", "торт");
	// echo "<br>";
	// echo test4("торт","еки","уш","бир");
	// echo "<br>";
	// echo test4("уш","бир","торт","еки");

	echo test4("бир еки уш торт");
	echo "<br>";
	echo test4("еки бир уш торт");
	echo "<br>";
	echo test4("торт еки уш бир");
	echo "<br>";
	echo test4("уш бир торт еки");
	?>
</body>
</html>