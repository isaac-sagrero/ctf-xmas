<?php
session_start();
if (!isset($_SESSION['iduser'])) {
	header("location:login.html");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$servername = "ctf-mysql";
	//$servername = "localhost";
	$username = "xmas2018";
	$password = "LV_Z@HmM@1_d";
	$dbname = "xmas2018";
	$iduser = $_SESSION['iduser'];
	//$easter = $_SESSION['easter'];

// Crear conexión
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Traer los códigos
	$sentencia = $conn->prepare("SELECT idcodigos,codigo,puntos,usado,tipo FROM codigos WHERE codigo=?");
	//$stmt->bind_param("s", $codigo);

// Fija parámetros
	$codigo = $_POST['codigo'];
//Por su esfuerzo
	if (preg_match('/@"|(<(script|iframe|embed|frame|frameset|object|img|applet|body|html|style|layer|link|ilayer|meta|bgsound))/', $codigo)) {
		$_SESSION['resp'] = 5;
		header("location:./" . $_POST['url']);
		

	} 

//Ejecuta
	elseif ($sentencia->execute([$codigo]) === TRUE) {

		if ($sentencia->rowCount() === 0) {

			$_SESSION['resp'] = 1;
			header("location:./" . $_POST['url']);
		} else {
			while ($row = $sentencia->fetch()) {
				$result_idcodigos = $row["idcodigos"];
				$result_codigo = $row["codigo"];
				$result_puntos = $row["puntos"];
				$result_usado = $row["usado"];
				$result_tipo = $row["tipo"];
			}

			if ($result_tipo === "eg_web" || $result_tipo === "eg_melchor" || $result_tipo === "eg_gaspar" || $result_tipo === "eg_baltasar" || $result_tipo === "rally_melchor" || $result_tipo === "rally_gaspar" || $result_tipo === "rally_baltasar" || $result_tipo === "eg_esfuerzo") {
//osea
				$_SESSION['resp'] = 4;
				header("location:./" . $_POST['url']);
				//echo $result_tipo;
				die;

			}

			if ($result_usado == 1) {
//osea
				$_SESSION['resp'] = 3;
				header("location:./" . $_POST['url']);

			} else {
				if ($result_codigo == $codigo) {

					//if ($easter == $result_tipo) {

					//}
					//ok
					$_SESSION['resp'] = 2;

					//Deshabilita el codigo
					/*	$stmt = $conn->prepare("UPDATE codigos SET usado = 1 WHERE idcodigos=?");
					$stmt->bind_param("i", $result_idcodigos);
					$stmt->execute();
*/
					//validar que no haya usado ya el código
					$sentencia = $conn->prepare("SELECT idretos,idcodigos,idusers FROM retos WHERE idcodigos=? AND idusers=?");
					//$stmt->bind_param("ii", $result_idcodigos, $iduser);
					if ($sentencia->execute([$result_idcodigos, $iduser]) === TRUE) {
						if ($sentencia->rowCount() === 1) {
							$_SESSION['resp'] = 3;
							header("location:./" . $_POST['url']);
						} else {
							//actualiza el reto acompletado
							$sentencia = $conn->prepare("INSERT INTO retos (idcodigos, idusers) VALUES (?,?)");
							//$sentencia->bind_param("ii", $result_idcodigos, $iduser);
							//echo $result_idcodigos;."<br>"
							//echo $iduser;
							$sentencia->execute([$result_idcodigos, $iduser]);
							header("location:./" . $_POST['url']);

						}
					}

				} 
				else {
					//Buen intento
					$_SESSION['resp'] = 1;
					header("location:./" . $_POST['url']);

				}

			}

		}
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sentencia->closeCursor();
	$sentencia = null;
	$conn = null;

} else {

	echo "No vienen por POST";

}

?>