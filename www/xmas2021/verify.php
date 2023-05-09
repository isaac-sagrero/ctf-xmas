<?php

  $privatekey = "6LcR3H0UAAAAANH5k3WpWX5_Hf5PvBBp2qE8zBPH";

  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$privatekey.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);

        if($responseData->success){
        	echo "ok";
        }
        else{
        	"nel";
        }

  ?>