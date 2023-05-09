<?php
session_start();

if (!isset($_SESSION['iduser'])) {
	header("location:../login.html");
}




?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Hacker</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

div.volar {
  position: relative;
  top: 120px;
  left: 10px;
  background: bl
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="volar">
        <?php
            
            $user= $_POST ['username'];
            $pass= $_POST ['password'];

            $user_tmp = str_replace("%0a",'',$user);
            $user_tmp = str_replace("%0d",'',$user_tmp);
            $user_tmp = str_replace("%0A",'',$user_tmp);
            $user_tmp = str_replace("%0D",'',$user_tmp);


            $pass_tmp = str_replace("%0a",'',$pass);
            $pass_tmp = str_replace("%0d",'',$pass_tmp);
            $pass_tmp = str_replace("%0A",'',$pass_tmp);
            $pass_tmp = str_replace("%0D",'',$pass_tmp);



            if (preg_match("/'\s*(AND|OR|XOR|and|or|xor|&&|\|\|)/", $user_tmp) 
            || preg_match("/'\s*(AND|OR|XOR|and|or|xor|&&|\|\|)/", $pass_tmp)) {
                if (strpos($user, '%0A%0D') ||
                strpos($user, '%0a%0d') ||
                strpos($user, '%0A%0d') ||
                strpos($user, '%0a%0D') ||
                
                strpos($pass, '%0A%0D') ||
                strpos($pass, '%0a%0d') ||
                strpos($pass, '%0A%0d') ||
                strpos($pass, '%0a%0D') 
                
                ){
                echo '<h4 style="color: red; font-weight: bold; font-size: 20px;">Hacker!!! con eso evades cualquier validación,</h4>
                <h4 style="color: red; font-weight: bold; font-size: 20px;"> tu recomepensa: XmasHack{GmqMi042gAS6aA==}</h4>';
                }
                else {
                    echo '<br><img src="../img/clasico.png">';
                }
            }
            else{
                if ($_GET['s']=="1"){
                    echo '';
                }
                else{
                    
                    echo '<h4 style="color: white; font-weight: bold; font-size: 20px;">Falló la autenticación</h4>';
                }
            }
        ?>
        </div>
    <form action="./" method="POST">
        <h3>Jugaremos muévete luz verde</h3>

        <label for="username">Usuario</label>
        <input type="text" placeholder="Usuario" id="username" name="username">

        <label for="password">Contraseña</label>
        <input type="password" placeholder="------" id="password" name="password">

        <button type="submit">Log In</button>
        <div class="social">
          
        </div>
       <br>
       <br>

    </form>

  
</body>
</html>
<!-- partial -->
  
</body>
</html>
