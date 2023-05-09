<?php
ob_start();
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$servername = "ctf-mysql";
	//$servername = "localhost";
	$username = "xmas2018";
	$password = "LV_Z@HmM@1_d";
	$dbname = "xmas2018";

// Crear conexión
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sentencia = $conn->prepare("SELECT idusers,teamname,email,password FROM users WHERE email=?");
// Fija parámetros
	$email = $_POST['email'];
	$psw = $_POST['psw'];

	//Rabbit Hole
	if (preg_match("/'\s*(AND|OR|XOR|and|or|xor|&&|\|\|)/", $email)) {
		$_SESSION['sqli'] = "ok";
		header("location:4547d3a4-7c37-4f76-9440-a90868fec652.php");

	} else if (($email == "admin" || $email == "Admin" || $email == "ADMIN" || $email == "administrador" || $email == "administrator") && ($psw == "admin" || $psw == "12345" || $psw == "123" || $psw == "password")) {
		$_SESSION['cred'] = "ok";
		header("location:4547d3a4-7c37-4f76-9440-a90868fec652.php");
	} else {

		//Ejecuta
		if ($sentencia->execute([$email]) === TRUE) {
			if ($sentencia->rowCount() === 0) {
				//echo "Mal usuario o contraseña";
				header("location:./login_error.html");
			} else {
				while ($row = $sentencia->fetch()) {
					$result_idusers = $row["idusers"];
					$result_teamname = $row["teamname"];
					$result_email = $row["email"];
					$result_password = $row["password"];
					//echo "saca los valores de la BD<br>";
					//echo $result_password . "<br>";
					//echo $psw;
				}
				if (password_verify(hash('sha512', $psw, true), $result_password)) {
					$_SESSION['iduser'] = $result_idusers;
					$_SESSION['teamname'] = $result_teamname;
					$_SESSION['email'] = $result_email;
					header("location:inicio.php");
				} else {
					header("location:./login_error.html");
					//echo "llega aqui";
				}
			}
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$sentencia->closeCursor();
		$sentencia = null;
		$conn = null;

	}
} else {

	echo "No vienen por POST";

}
ob_end_flush();
?>
