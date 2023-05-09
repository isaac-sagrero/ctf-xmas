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
          
            background: url(img/bg2.png) no-repeat right center black;
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
.success {background-color: #4CAF50;} /* Green */
.info {background-color: #2196F3;} /* Blue */
.warning {background-color: #ff9800;} /* Orange */
.danger {background-color: rgb(213, 46, 46);} /* Red */ 
.other {background-color: #e7e7e7; color: black;} /* Gray */ 
  </style>
  
  <label style="color: white;">------------------------------------------------------</label>
<!--<p>&nbsp;</p>-->
<h2>Automation Team Party</h2>

<div>
<form action="valida_codigo.php" method="POST" autocomplete="off">
<label style="color: #C0C4D1;">Valida tus códigos, pon sólo lo que viene entre los corchetes XmasHack{XXXXXXXXXXXXXX==}:</label> <input type="text" name="codigo"><input type="submit" value="Sin miedo..."><br>
    <input type="hidden" value="mandalorian.php" name="url">
    </form>
<?php
if (isset($_SESSION['resp'])) {
	if ($_SESSION['resp'] == 1) {
    echo "<label style='color: red;'>Buen intento pero... código no válido</label><br><br>";
	
	} else if ($_SESSION['resp'] == 2) {
    echo "<label style='color: #39FF33;'>Felicidades, bandera capturada :)</label><br><br>";
	} else if ($_SESSION['resp'] == 3) {
		echo "<label style='color: yellow;'>¿Qué pasó? Ya usaste ese código</label><br><br>";
	} else if ($_SESSION['resp'] == 4) {
    echo "<label style='color: white;'>Creo que estás en la party incorrecta</label><br><br>";
  } else if ($_SESSION['resp'] == 5) {
    echo "<label style='color: white;'>Eso no funciona aquí pero... por tu intento XmasHack{jqiNdNFs4Ex8Og==}</label><br><br>";
	}
	unset($_SESSION["resp"]);
}

?>

</div>



<div>
<span class="label danger" style="color: white;">******</span>
<span onclick="location.hash='#reto1'" class="label danger" style="color: white">&nbsp;Ir a reto 1&nbsp;</span>
<span class="label danger" style="color: white;"><<<<<>>>>></span>
<span onclick="location.hash='#reto2'" class="label danger" style="color: white">&nbsp;Ir a reto 2&nbsp;</span>
<span class="label danger" style="color: white;">******</span>
</div>
<p></p>
<div>

<a id="reto1"><h3>Reto 1</h3></a>
<p style="text-align: justify;">

>> Inicia mandando un correo a <label style="color: rgb(213, 46, 46)">mandalorian_ctf@outlook.com</label>, asegurate de NO enviar el asunto vacío, manda cualquier texto pero acuérdate de lo que mandaste.<br>
>> Ingresa a <a rel="noopener noreferrer" target="_blank" href="https://mandalorianctf.ddns.net" style="color: rgb(213, 46, 46)">https://mandalorianctf.ddns.net</a> con las siguientes credenciales:<br>
User: hacker<br>
Pass: M4Nd4r1N4S.<br>
>> La paciencia premia a los padawan que buscan la verdad, por lo que sino encuentras nada, prueba refrescar y explorar la plataforma.
<p>&nbsp;</p>



<a id="reto2"><h3 sytle="color: white;">Reto 2</h3></a>
<p style="text-align: justify;">Se ha detectado actividad maliciosa con uno de nuestros clientes, uno de sus sitios fue vulnerado, cuando esto sucedió se realizo una captura de trafico de red.
<br><br>
Tu misión es:
<br><br>
 + Analizar la captura de trafico<br>
 + Identificar la conexión maliciosa<br>
 + Bloquear esa dirección ip en todos nuestros clientes<br><br>

Para poder realizar estas tareas, utilizaras un modulo de SOAR llamado "Investigación IP", puedes acceder a el sistema SOAR con los siguientes datos:

<br><br>
https://40.79.248.65/<br>
Usuario: CyberAnalyst<br>
Password: BaadBeefBaadF00d$
<br><br>


</p>
<a href="46cc6c7d-af37-432e-86c1-25630280174d/soar.zip" style="color: rgb(213, 46, 46)">Archvo para descargar/URL</a>
<p>Si necesitas una guía para usar este modulo de SOAR, aquí hay 2 imágenes:
</p>
<img src="46cc6c7d-af37-432e-86c1-25630280174d/soar_image1.png" width=100% height=100% alt="imagen"></img><br>
<img src="46cc6c7d-af37-432e-86c1-25630280174d/soar_image2.png" width=100% height=100% alt="imagen"></img>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>






</div>   
