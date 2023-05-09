

<!DOCTYPE html>
Felicidades, no vulneraste nada pero ¿Quieres un código?<br>
<br>
Di que "lo necesitas rápido y vigorosamente..."

<form action="4547d3a4-7c37-4f76-9440-a90868fec652.php" method="POST">
<br>
<input type="text" name="respuesta">

<input type="submit" value="Suplicar">
</form>
<br>
<a href="./login.html">Regresar a login</a>
<br>
<br>

</html>



<?php


$respuesta = strtolower ($_POST["respuesta"]);
if ($respuesta=="lo necesito rápido y vigorosamente" || $respuesta=="lo necesito rápido y vigorosamente..." || $respuesta=="lo necesito rapido y vigorosamente" || $respuesta=="lo necesito rapido y vigorosamente..."){
    echo "<br>";
    echo "Aquí tienes tu código XmasHack{f06b8ed4-c179}";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Tú en este momento...";
    echo "<br>";
    echo "<br>";
    echo "<img src='img/notuveeleccion.png'>";
}elseif (!$respuesta==""){
    echo "No estás pidiendo bien";
    echo "<br>";
}



?>