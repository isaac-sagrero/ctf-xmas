<?php
session_start();

if (!isset($_SESSION['iduser'])) {
	header("location:login.html");
}

?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>XmasHack 2021</title>
    <link href="./css/style_2.css" rel="stylesheet">
<script src="./Mac OS Dock with CSS3_files/f(6).txt"></script><script src="./Mac OS Dock with CSS3_files/osd.js"></script><script src="./Mac OS Dock with CSS3_files/f(7).txt"></script><script async="" src="./Mac OS Dock with CSS3_files/analytics.js"></script><script src="./Mac OS Dock with CSS3_files/f(8).txt" id="google_shimpl"></script><script type="text/javascript" src="./Mac OS Dock with CSS3_files/jquery-1.11.1.js"></script>
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
          
            background: url(img/bg5.png) no-repeat right center black;
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
            width: 60%;
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

<body aria-hidden="false">
    <header>
    </header>


    <div class="wrapper" style="height: 18036px;">
        <div class="container">
            <h1 style="color: rgb(213, 46, 46);">Bienvenido XmasHack 2021</h1>
            <h2><?php echo "Jugador número: " . htmlentities(strtoupper($_SESSION['teamname'])) ?></h2>
            <p>Cada party contiene dos retos, diviértete y sobrevive ;)</p>
            
            <!--<p>&nbsp;</p>-->
    
         <?php

            $codigo = $_GET ['o'];

         
             if ($codigo=="1"){

              echo "<iframe src='./chewbacca.php' frameborder='0' allowfullscreen width=100% height=500></iframe>";
          }
          elseif ($codigo=="2"){

            echo "<iframe src='./darthvader.php' frameborder='0' allowfullscreen width=100% height=500></iframe>";
        }elseif ($codigo=="3"){

          echo "<iframe src='./mandalorian.php' frameborder='0' allowfullscreen width=100% height=500></iframe>";
      }
      elseif ($codigo=="4"){

        echo "<iframe src='./trooper.php' frameborder='0' allowfullscreen width=100% height=500></iframe>";
    } 
        else{

          echo "<iframe src='./dashboard.php' frameborder='0' allowfullscreen width=100% height=500></iframe>";
      }
       ?>
   
   
        
        <div id="dock-container">
              <ul>
                <li>
                    <span>Inicio</span>
                    <a href="./inicio.php"><img src="img/circulo.png"></a>
                  </li>
                <li>
                <li>
                    <span>CT Party</span>
                    <a href="./inicio.php?o=1"><img src="img/triangulo.png"></a>
                  </li>
                <li>
                    <span>CI Party</span>
                    <a href="./inicio.php?o=2"><img src="img/cuadrado.png"></a>
                  </li>
              
                  <li>
                    <span>Automation Party</span>
                    <a href="./inicio.php?o=3"><img src="img/estrella.png"></a>
                </li>
                <li>
                    <span>DFIRT Party</span>
                    <a href="./inicio.php?o=4"><img src="img/sombrilla.png"></a>
                  </li>
                  <li>
                    <span>Salir</span>
                    <a href="./salir.php"><img src="img/salir0.png"></a>
                  </li>
               
              </ul>
        </div>
    </div>  
    <script>
    $(document).ready(function(){
        var hdrht = ($(window).height()) - ($("#site-header").height());
        $(".wrapper").height(hdrht);
    });
    </script>

