<?php
$conn = mysqli_connect("127.0.0.1","root","","agenzia");
$username= $_POST["user"];
$password= $_POST["pass"];
$search= "SELECT * FROM users WHERE Username = '$username'";
$utent= mysqli_query($conn,$search);

if(mysqli_num_rows($utent)>0){
$message= array(
	"result" => "notOk",
	"errore" => "username gia usato",
);
echo json_encode($message);
}
else{
	$toinsert = "INSERT INTO users	
			VALUES
			('$username','$password')";


	$result = mysqli_query($conn,$toinsert);
}
if($result){$message= array(
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