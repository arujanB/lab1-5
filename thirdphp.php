<?php
function connection(){
	return mysqli_connect("localhost", "root", "", "first_db");
}

if(isset($_GET['first_name'])){
	$mysql = connection();
	$statement = $mysql -> prepare("insert into users(first_name, second_name, date_of_birth, gender) values(?,?,?,?)");
	$gender = (int)$_GET['gender'];
	$statement -> bind_param("ssis", $_GET['first_name'], $_GET['second_name'], $gender, $_GET['my_date_of_birth']);
	$statement -> execute();

	$statement -> close();
	$mysql -> close();

	echo $_GET['first_name']." ".$_GET['second_name']." ".$_GET['gender']." ".$_GET['my_date_of_birth'];
//c$my = mysqli_connect("localhost", "root", "", "first_db");
}

// if(mysqli_connect_errno()){
// 	echo "Failed toconnect to Sql:" . mysqli_connect_error();
// 	exit();
// }
?>