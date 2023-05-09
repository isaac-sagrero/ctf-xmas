<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$privatekey = "6LfazAsaAAAAAD0dELDzxjgmTDDYcf76MS2xpYyL";
	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $privatekey . '&response=' . $_POST['g-recaptcha-response']);
	$responseData = json_decode($verifyResponse);

	//if ($responseData->success) {
	if(true){

		//$servername = "ctf-mysql";
		$servername = "localhost";
		$username = "xmas2018";
		$password = "LV_Z@HmM@1_d";
		$dbname = "xmas2018";
		// Fija parámetros
		$teamname = trim($_POST['teamname']);
		$psw = $_POST['psw'];
		$team1 = trim($_POST['team1']);
		$team2 = trim($_POST['team2']);
		$team3 = trim($_POST['team3']);
		$team4 = trim($_POST['team4']);
		$email = trim($_POST['email']);

		// Crear conexión
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//Valida que no exista el correo ya esté registrado

		$sentencia = $conn->prepare("SELECT idusers, email FROM users WHERE email = ? OR teamname = ?");
		if ($sentencia->execute([$email, $teamname]) === TRUE) {
			//$result = $sentencia->get_result();
			if ($sentencia->rowCount() === 0) {
				//Agrega nuevo registro
				$sentencia = $conn->prepare("INSERT INTO users (teamname, team1, team2,team3,team4,password,email) VALUES (?, ?, ?,?,?,?,?)");
				$psw_hash = password_hash(hash('sha512', $psw, true), PASSWORD_DEFAULT);
				//$sentencia->bind_param("sssssss", $teamname, $team1, $team2, $team3, $team4, $psw_hash, $email);

				//Ejecuta
				if ($sentencia->execute([$teamname, $team1, $team2, $team3, $team4, $psw_hash, $email]) === TRUE) {
					header("location:exito_registro.html");
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			} else {
				while ($row = $sentencia->fetch()) {
					header("location:registro_error.html");
				}
			}
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}

		//$conn->close();
		$sentencia->closeCursor();
		$sentencia = null;
		$conn = null;

	}
	//Else del cpatcha
	else {
		echo "Tssss te quieres saltar el Captcha ;)";
	}
} else {
	echo "No vienen por POST";

}

?>