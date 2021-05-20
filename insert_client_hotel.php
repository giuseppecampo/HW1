<?php
$conn = mysqli_connect("127.0.0.1","root","","agenzia");
$service= $_POST["servizio"];
$nome= $_POST["name"];
$type=$_POST["tipo"];
$partenza=$_POST["part_airport"];
$destinazione=$_POST["dest_airport"];
	$toinsert = "INSERT INTO prenotazione values ('$nome','$service','$type','$partenza','$destinazione')";
	$result = mysqli_query($conn,$toinsert);
if($result){  
	$message= array(
	"result" => "ok",
	"errore" => "inserito correttamente",

);
echo json_encode($message);
} else{
	$message= array(
		"result" => "notOk",
		"errore" => "non inserito",
	);
	echo json_encode($message);
	}

?>