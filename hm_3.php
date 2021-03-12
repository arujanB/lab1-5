<?php

function connection(){
	$mysqli = new mysqli("localhost", "root", "", "hw3");
	if($mysqli -> connect_errno){
	echo "fail" . $mysqli -> connect_error;
	exit();
}
return $mysqli;
}

function add_user($marka, $made_date, $mass, $color, $id_c){
	$mysqli = connection();
	$statement = $mysqli -> prepare("insert into hw(marka, made_date, mass, color, id_c) values(?, ?, ?, ?, ?)");
	$mass=(int)$mass;
	$statement -> bind_param("ssisi", $marka, $made_date, $mass, $color, $id_c);
	$statement -> execute();
	$statement -> close();
	$mysqli -> close();
}

if (isset($_GET['state']) && $_GET['state'] == "add"){
	add_user($_GET['marka'], $_GET['made_date'], $_GET['mass'], $_GET['color'], $_GET['id_c']);
}

function select_users(){
	$mysqli = connection();
	$query = "select * from hw";
	$result = $mysqli -> query($query);

	if($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){
			echo "marka". $row["marka"] . "made_date". $row["made_date"]. "mass" . $row["color"]. "id_c". $row["id_c"]."<br>";
		}
	}else{
		echo "0 results";
	}
	$mysqli->close();
}

if(isset($_GET['state']) && $_GET['state'] == "select"){
	select_users();
}

function update_user($marka, $made_date, $mass, $color, $id_c){
	$mysqli = connection();
	$mass = (int)$mass;
	global $last_id;
	$query = "update hw set marka = '$marka', made_date = '$made_date', mass = '$mass', color = '$color', id_c = '$id_c' where marka = 'Toyota'";
	if($mysqli ->query($query) === TRUE){
		echo "Record updated successfully";
	}else{
		echo "Error updating recorded: ". $mysqli ->error;
	}

	$mysqli -> close();
}
	
if(isset($_GET['state']) && $_GET['state'] == "update"){
	update_user($_GET['marka'], $_GET['made_date'], $_GET['mass'], $_GET['color'], $_GET['id_c']);
}

function deleted($marka){
	$mysqli = connection();
	$query = "Delete from hw where marka = '$marka'";
	if($mysqli -> query($query) === True){
		echo "Record delete succseccfully";
	}else{
		echo "Error deleing record: " . $mysqli ->error;
	}

	$mysqli -> close();
}

if(isset($_GET['state']) && $_GET['state'] == "delete"){
	deleted($_GET['marka']);
}
?>

