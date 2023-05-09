<!DOCTYPE html>
 <link rel="shortcut icon" href="dv.ico" />
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  


  <title>XmasHack 2020</title>
  
  
  
  
<style>
  

  .label {
  color: white;
  padding: 8px;
  font-family: Arial;
  float: left;
}
.success {background-color: #4CAF50;} /* Green */
.info {background-color: #2196F3;} /* Blue */
.warning {background-color: #ff9800;} /* Orange */
.danger {background-color: #f44336;} /* Red */ 
.other {background-color: #4BE7EE; color: black;} /* Gray */ 

.myDiv {
  border: 5px outset red;
  background-color: lightblue;    
  text-align: center;
}
body {
  margin: 0;
  background-color: black;
}

.star {
  position: absolute;
  width: 1px;
  height: 1px;
  background-color: white;
}

/* Set the animation, color, size and hide the text */
.intro {
    position: absolute;
    top: 30%;
    left: 35%;
    z-index: 1;
    animation: intro 6s ease-out 1s;
    color: rgb(75, 213, 238);
    font-weight: 400;
    font-size: 300%;
    opacity: 0;
}

@keyframes intro {
    0% {
        opacity: 0;
    }
    20% {
        opacity: 1;
    }
    90% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

/* Set the animation & hide the logo */
.logo {    
    position: absolute;
    top: -25%;
    left: 30%;
    z-index: 1;
    margin: auto;
    animation: logo 9s ease-out 9s;
    opacity: 0;
}

.logo svg {
    width: inherit;
}

/* Scale the logo down and maintain it centered */
@keyframes logo {
    0% {
        width: 18em;        
        transform: scale(0.75);
        opacity: 1;
    }
    50% {
        opacity: 1;
        width: 18em;      
    }
    100% {
        opacity: 0;
        transform: scale(0.1);
        width: 18em;
    }
}

p {
  color: #FFFF82;
}

/* Set the font, lean the board, position it */
#board {
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  transform: perspective(300px) rotateX(25deg);
  transform-origin: 50% 100%;
  text-align: justify;
  position: absolute;
  margin-left: -9em;
  font-weight: bold;
  overflow: hidden;
  font-size: 350%;
  height: 50em;
  width: 18em;
  bottom: 0;
  left: 60%;
}

#board:after {    
  position: absolute;
  content: ' ';
  bottom: 60%;
  left: 0;
  right: 0;
  top: 0;
}

/* Set the scrolling animation and position it */
#content {
  animation: scroll 100s linear 16s;
  position: absolute;
  top: 100%;
}

#title, #subtitle {
  text-align: center;
}

@keyframes scroll {
    0% {
        top: 100%;
    }
    100% {
        top: -170%;
    }
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">
  <section class="intro">
 ¿Estás dispuesto en<br> aceptar la invitación?
</section>
<section class="logo" align="center">

  <img src="medios/logo_jc2.png"></section>
</section>


<audio id="miAudio" autoplay loop>
  <source src="medios/jc.mp3" type="audio/mp3">
  Lástima no podrás escuhcar el audio, no lo sopora tu navegador.
</audio>
<p></p>


<script type="text/javascript">

  var audio = document.getElementById('miAudio');
  function inicio(){

    window.location.href = "xmas2021/login.html";
  }

  function play(){

    audio.play();
  }
  function pause(){

    audio.pause();
  }

</script>
<img src="medios/xmas_jc.png" alt="">
<br>
<p align="left">
<span class="label other" >******</span>
<span onclick="inicio()" class="label other" >Saltar intro</span>
<span onclick="play()" class="label other" >Reproducir audio</span>
<span onclick="pause()" class="label other" >Pausar audio</span>
<span class="label other" >******</span>

</p>




    

  
      <script id="rendered-js">
// Sets the number of stars we wish to display
const numStars = 100;

// For every star we want to display
for (let i = 0; i < numStars; i++) {if (window.CP.shouldStopExecution(0)) break;
  let star = document.createElement("div");
  star.className = "star";
  var xy = getRandomPosition();
  star.style.top = xy[0] + 'px';
  star.style.left = xy[1] + 'px';
  document.body.append(star);
}

// Gets random x, y values based on the size of the container
window.CP.exitedLoop(0);function getRandomPosition() {
  var y = window.innerWidth;
  var x = window.innerHeight;
  var randomX = Math.floor(Math.random() * x);
  var randomY = Math.floor(Math.random() * y);
  return [randomX, randomY];
}

</script>


 
</body></html>