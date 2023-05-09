<?php
session_start();

if (!isset($_SESSION['login'])) {
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>





<?php
$servername = "ctf-mysql";
//$servername = "localhost";
$username = "xmas2018";
$password = "LV_Z@HmM@1_d";
$dbname = "xmas2018";
// Crear conexión
$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8;", $username, $password);
//mysqli_set_charset($conn, 'utf8'); //linea a colocar
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sentencia = $conn->prepare("

	SELECT
users.idusers as iduser,
users.teamname as teamname,
codigos.tipo as tipo,
codigos.puntos as puntos,
codigos.reto as reto
FROM xmas2018.retos
INNER JOIN codigos ON retos.idcodigos=codigos.idcodigos
INNER JOIN users ON retos.idusers=users.idusers
WHERE users.idusers = ?
ORDER by 2 DESC");

// Fija parámetros
$id = $_GET['id'];

//Ejecuta
if ($sentencia->execute([$id]) === TRUE) {
	if ($sentencia->rowCount() === 0) {
		echo "<h1>Sin registros</h1><!--  ";
	} else {

		echo "<h2>";
		echo htmlentities($_GET["teamname"]);
		echo "</h3>";
		echo ("<table>
                <tr>
                <th>Puntos</th>
                <th>Descripción de reto</th>
                <th>Tipo de reto</th>
              </tr>
              ");
		while ($row = $sentencia->fetch()) {
			echo "<tr>";
			echo "<td>";
			echo htmlentities($row["puntos"]);
			echo "</td>";
			echo "<td>";
			echo htmlentities($row["reto"]);
			echo "</td>";
			echo "<td>";
			echo htmlentities($row["tipo"]);
			echo "</td>";
			echo "</tr>";

		}

		echo "</table>";

	}
}
$sentencia->closeCursor();
$sentencia = null;
$conn = null;
?>


</body>
</html>
