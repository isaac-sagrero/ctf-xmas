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
<h2>DFIRT y Researching Party</h2>

<div>
<form action="valida_codigo.php" method="POST" autocomplete="off">
<label style="color: #C0C4D1;">Valida tus códigos, pon sólo lo que viene entre los corchetes XmasHack{XXXXXXXXXXXXXX==}:</label> <input type="text" name="codigo"><input type="submit" value="Sin miedo..."><br>
    <input type="hidden" value="trooper.php" name="url">
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
    echo "<label style='color: white;'>Eso no funciona aquí pero... por tu intento XmasHack{30e54b0a-a20e}</label><br><br>";
	}
	unset($_SESSION["resp"]);
}

?>

<div>
<span class="label danger" style="color: white;">******</span>
<span onclick="location.hash='#reto1'" class="label danger" style="color: white">&nbsp;Ir a reto 1&nbsp;</span>
<span class="label danger" style="color: white;"><<<<<>>>>></span>
<span onclick="location.hash='#reto2'" class="label danger" style="color: white">&nbsp;Ir a reto 2&nbsp;</span>
<span class="label danger" style="color: white;">******</span>
</div>
<p></p>
<div>
<a id="reto1"><h3 sytle="color: white;">Reto 1</h3></a>
<p style="text-align: justify;">El emperador le ha prestado su computadora a la persona incorrecta y esta última ha borrado varias fotografías de su última campaña política. Después de ejecutarlo nos ha pedido apoyo para recuperar sus archivos borrados, más vale que lo hagamos o podríamos tener la misma fortuna que el soldado anterior.<br><br>
Una de las fotografías más importantes contiene un código para su campaña que te "volará el cerebro".</p>
<a href="9cb80f08-8a01-4584-94dc-8bc4772dae0f/EMPEROR.7z" style="color: rgb(213, 46, 46)">Aquí está la "máquina" del emperador</a>
<br><br>

<p>&nbsp;</p>
<!--<a id="reto2"><h3>Reto 2</h3></a>
<p style="text-align: justify;">Descripción del reto, lo que salga de su ronco pecho y que quiera sumar. Bla bla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla..</p>
<a href="#" style="color: rgb(213, 46, 46)">Archvo para descargar/URL</a>
<br><br>
<img src="img/___wise.png" width=25% height=50% alt="imagen"></img>-->
<p>&nbsp;</p>

</div>    