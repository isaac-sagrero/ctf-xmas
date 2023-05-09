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
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
    background-image: url("img/xmas2.png");
    background-repeat: no-repeat;
    background-position: center bottom;

}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}
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
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: white;
    position: fixed;
    height: 100%;
    overflow: auto;
    background-image: url("img/xmas2.png");
    background-repeat: no-repeat;
    background-position: center bottom;

}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


li a:hover, .dropdown:hover .dropbtn {
    background-color: brown;
}
li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}



/*Tabla*/
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}


</style>
</head>
<body>

<ul>
  <li><div align="left"><h3>Bienvenido Admin</h3></div></li>
  <li><a class="active" href="./scoreboard.php">$_INICIO</a></li>
  <li><a href="./salir.php">$_SALIR</a></li>
  <br>
  <br>
  <br>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Posiciones</h2>
  <p>
<table id="customers">
        <thead>
            <tr>
                <th>Posición</th>
                <th>Nombre de equipo</th>
                <th>Puntos</th>
            </tr>
        </thead>
        <tbody>
       <?php
$servername = "ctf-mysql";
//$servername = "localhost";
$username = "xmas2018";
$password = "LV_Z@HmM@1_d";
$dbname = "xmas2018";
// Crear conexión
$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8;", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sentencia = $conn->prepare("SELECT
users.idusers as iduser,
users.teamname as teamname,
sum(codigos.puntos) as puntos
FROM xmas2018.retos
INNER JOIN codigos ON retos.idcodigos=codigos.idcodigos
INNER JOIN users ON retos.idusers=users.idusers
GROUP BY retos.idusers
ORDER by 3 DESC");

//Ejecuta
if ($sentencia->execute() === TRUE) {
	if ($sentencia->rowCount() === 0) {

	} else {
		$i = 1;
		while ($row = $sentencia->fetch()) {
			?>
                <tr>
                    <td><?php echo $i;
			$i++ ?></td>
                    <td><a href="./detalle.php?id=<?php echo $row['iduser'] ?>&teamname=<?php echo htmlentities($row['teamname']) ?>" target="_blank"><?php echo htmlentities($row["teamname"]) ?></a>
                  <td><?php echo $row["puntos"] ?></td>

                </tr>

           <?php
}
		;
		?>
            </tbody>
            </table>

<?php }
} else {
	// echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<a href="./scoreboard.php">Actualizar</a>
<br>
<h2>Equipos registrados</h2>

<table id="customers">
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Correo</th>
                <th>Integrante 1</th>
                <th>Integrante 2</th>
                <th>Integrante 3</th>
                <th>Integrante 4</th>
            </tr>
        </thead>
        <tbody>

<?php

$sentencia = $conn->prepare("SELECT teamname,email,team1,team2,team3,team4 FROM users");

//Ejecuta
if ($sentencia->execute() === TRUE) {
	if ($sentencia->rowCount() === 0) {

	} else {

		while ($row = $sentencia->fetch()) {
			?>
                <tr>
                    <td><?php echo htmlentities($row['teamname']) ?></td>
                  <td><?php echo htmlentities($row["email"]) ?></td>
                  <td><?php echo htmlentities($row["team1"]) ?></td>
                  <td><?php echo htmlentities($row["team2"]) ?></td>
                  <td><?php echo htmlentities($row["team3"]) ?></td>
                  <td><?php echo htmlentities($row["team4"]) ?></td>

                </tr>

           <?php
}
		;
		?>
            </tbody>
            </table>

<?php }
} else {
	// echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<a href="./scoreboard.php">Actualizar</a>
<br>
  </p>


</div>

</body>
</html>