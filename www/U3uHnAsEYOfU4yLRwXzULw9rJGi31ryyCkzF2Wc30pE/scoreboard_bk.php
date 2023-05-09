<?php
session_start();

$pws = $_POST['pws'];
if ($pws === "88R3y35_Xmas@2018") {
	echo "mostrar tablero";
	$servername = "ctf-mysql";
	$username = "xmas2018";
	$password = "LV_Z@HmM@1_d";
	$dbname = "xmas2018";

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sentencia = $conn->prepare("SELECT
									users.teamname as teamname,
									sum(codigos.puntos) as puntos
									FROM xmas2018.retos
									INNER JOIN codigos ON retos.idcodigos=codigos.idcodigos
									INNER JOIN users ON retos.idusers=users.idusers
									GROUP BY retos.idusers
									ORDER by 2 DESC");

} else {

	unset($_SESSION['login']);
	header("location:scoreboard.php");

}

?>