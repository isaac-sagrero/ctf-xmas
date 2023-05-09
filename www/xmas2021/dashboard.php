<?php
session_start();

if (!isset($_SESSION['iduser'])) {
	header("location:login.html");
}

?>
 <link href="css/style_2.css" rel="stylesheet">
    
<style>
        * {
          
            box-sizing: border-box;
            
        }
        .container {
            width: 60%;
            position: fixed;
            
            text-align: justify;
            
        }
        .wrapper {
            width: 100%;
            /*background: #660033;*/
          
            background: url(img/bg3.png) no-repeat right center black;
            background-size: 30%;
            padding: 0 !important;
            color: black;
        }
        p { color: #fff;
          
        }
        
        ul {
            padding: 0;
        }
        
        
        #dock-container {
            position: fixed;
            bottom: 0;
            text-align: center;
            right: 20%;
            left: 10%;
            width: 55%;
            background: rgba(255,255,255,0.2);
            border-radius: 10px 10px 0 0;
            
        }
        #dock-container li {
            list-style-type: none;
            display: inline-block;
            position: relative;
           
        }
        
        #dock-container li img {
          width: 100px;
          height: 100px;
          -webkit-box-reflect: below 2px
                    -webkit-gradient(linear, left top, left bottom, from(transparent),
                    color-stop(0.7, transparent), to(rgba(255,255,255,.5))); /* reflection is supported by webkit only */
          -webkit-transition: all 0.3s;
          -webkit-transform-origin: 50% 100%;
        }
        #dock-container li:hover img { 
          -webkit-transform: scale(2);
          margin: 0 2em;
        }
        #dock-container li:hover + li img,
        #dock-container li.prev img {
          -webkit-transform: scale(1.5);
          margin: 0 1.5em;
        }
        
        #dock-container li span {
            display: none;
            position: absolute;
            bottom: 210px;
            left: 0;
            width: 100%;
            background-color: white;
            padding: 4px 0;
            border-radius: 12px;
            
        }
        #dock-container li:hover span {
            display: block;
            color: rgb(213, 46, 46);
            
        }

        #customers {
          
  font-family: Arial, Helvetica, sans-serif;
  color: white;
  border-collapse: collapse;
  width: 100%;
 
  
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: black;}

#customers tr:hover {background-color: grey;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(213, 46, 46);
  color: white;
}

.icontaner {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 75%; /* 4:3 Aspect Ratio */
}

.responsive-iframe {
  
 
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 5000;
  border: none;
}
        
	</style>
<label style="color: white;">------------------------------------------------------</label>
<!--<p>&nbsp;</p>-->

<h3>Posiciones</h3>
<a href="./dashboard.php" style="color: rgb(213, 46, 46)">Actualizar</a>
  <table id="customers">
 <p></p>
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
$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sentencia = $conn->prepare("SELECT
users.teamname as teamname,
sum(codigos.puntos) as puntos
FROM xmas2018.retos
INNER JOIN codigos ON retos.idcodigos=codigos.idcodigos
INNER JOIN users ON retos.idusers=users.idusers
GROUP BY retos.idusers
ORDER by 2 DESC");

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
          <td><?php echo htmlentities($row["teamname"]) ?></td>
        <td><?php echo $row["puntos"] ?></td>

      </tr>

 <?php
}

?>
  </tbody>
  </table>

<?php }
} else {
// echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<br>
</p>

<?php

$sentencia = $conn->prepare("SELECT
users.teamname as teamname,
sum(codigos.puntos) as puntos
FROM xmas2018.retos
INNER JOIN codigos ON retos.idcodigos=codigos.idcodigos
INNER JOIN users ON retos.idusers=users.idusers
WHERE retos.idusers=?
GROUP BY retos.idusers
ORDER by 2 DESC");
if ($sentencia->execute([$_SESSION['iduser']]) === TRUE) {
if ($sentencia->rowCount() === 0) {
//no existe el id de usuario
} else {
while ($row = $sentencia->fetch()) {
  $result_tus_puntos = $row["puntos"];
}
}
} else {
//echo "Error: " . $sql . "<br>" . $conn->error;
}
//$sentencia->closeCursor();
//$sentencia = null;
//$conn = null;
?>
<h4>Tus puntos <?php echo $result_tus_puntos ?></h4>

<p>
<h3>Tus retos resueltos</h3>
</p>
<div style="overflow: auto;">
<table id="customers">
<tbody>
    <tr>
      <th>Puntos</th>
      <th>Tipo de reto</th>
      <th>Descripción de reto</th>
    </tr>

<?php

$sentencia = $conn->prepare("SELECT
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
$id = $_SESSION['iduser'];
//$id = 1;

//Ejecuta
if ($sentencia->execute([$id]) === TRUE) {
if ($sentencia->rowCount() === 0) {
//Aun no tiene retos;
} else {
//Ya tiene retos

while ($row = $sentencia->fetch()) {
  //Puntos
  echo "<tr>";
  echo "<td>";
  echo htmlentities($row["puntos"]);
  echo "</td>";

  //Descripcion
  echo "<td>";
  echo htmlentities($row["tipo"]);
  echo "</td>";

  //Tipo
  echo "<td>";
  echo htmlentities($row["reto"]);
  echo "</td>";
  echo "</tr>";

}
}
}

?>
</tbody>
</table>
</div>    