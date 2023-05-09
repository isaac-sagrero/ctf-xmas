
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
            
        </style>
    <label style="color: white;">------------------------------------------------------</label>
    <!--<p>&nbsp;</p>-->
    <h4>Códigos del evento</h4>

    <a href="./admin.php" style="color: rgb(213, 46, 46)">Actualizar</a>

    
    
    <br>
    </p>
    
    <p>
    <h3>Códigos</h3>
    </p>
    <div style="overflow: auto;">
    <table id="customers">
    <tbody>
        <tr>
          <th>Puntos</th>
          <th>Código</th>
          <th>Descripción</th>
        </tr>
    <input type="hidden" value="La realidad es que encontraste nada es de 'mentis' esta página,  
    pero para que no te sientas mal uno de los código sí es válido"/>
    </tr><tr><td>350</td><td>XmasHack{6244d8cc-a5bd}</td><td>Reto Ciberinteligencia</td></tr></tbody>
    </tr><tr><td>150</td><td>XmasHack{4fb242b0-bfb4}</td><td>Reto Ciberinteligencia</td></tr></tbody>
    </tr><tr><td>350</td><td>XmasHack{cf5594d2-2125}</td><td>Reto SOAR</td></tr></tbody>
    </tr><tr><td>150</td><td>XmasHack{bde51677-5c1c}</td><td>Reto SOAR</td></tr></tbody>
    </tr><tr><td>350</td><td>XmasHack{4c0f4c1b-cfc8}</td><td>Reto Consultoría Técnica</td></tr></tbody>
    </tr><tr><td>150</td><td>XmasHack{f9210cdb-9ced}</td><td>Reto Consultoría Técnica</td></tr></tbody>
    </tr><tr><td>300</td><td>XmasHack{b7838bb1-e17c}</td><td>Reto Respuesta a Incidentes</td></tr></tbody>
    </tr><tr><td>150</td><td>XmasHack{38e8194c-bebd}</td><td>Reto Respuesta a Incidentes</td></tr></tbody>
    </table>
    </div>    