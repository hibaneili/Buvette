<DOCTYPE html>
   <?php 
    include("connect.php");
  ?>    
<html>
    <head>
   
        <title> N'importe quoi </title>
        <link href="css/bootstrap.css">
        
        <style>
            .nb{
                float: left;
            }
            #hm{
                width: 70px;
                height: 70px;
            }
            .jl{
                color: rebeccapurple;
                margin-left: 100px;
            }
            h5{
                color: aqua;
            }
            ul li{
                float:left;
                margin: 20px;
                
            }
            .list{
                color: white;
                background-color: navy;
                height: 50px;
                text-align: center;
            }
            ul li a{
                text-decoration: none;
                color: white;
            }
            ul{
                margin-left: 200px;
                list-style: none;
                font-size: 20px;
            }
            .list ul li:hover{
                opacity: 0.6;
                color: red;
                background-color: aqua;
                width:200px;
                
            
            }
            .pied{
                width: 100%;
                height: 70px;
                color: orangered;
                background-color: navy;
            }
            .jalila{
                 background-color:grey;
                height: 400px;
            }
        </style>
    </head>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="nb"><img src="material_projet/img/logo.jpg" id="hm"></div>
                <div class="jl"><h1>EUROBuvettes </h1>
                <h5>Le Site de Gestien de Buvette de l'EURO 2016 !!</h5></div>
            
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="list">
                  <ul>
                      <li><a href="#">Accueil.php</a></li>
                      <li><a href="#">Statistiqye.php</a></li>
                      <li><a href="#">Recherchemembrres.php</a></li>
                      <li><a href="#">Affectations.php</a></li>
                      <li><a href="#">Prive.php</a></li>
                    </ul>
                </div>
                <div class="jalila"></div>
                <div class="pied"><br> pied de page</div>
                
            
            </div>
        </div>
        
        
      
         <script src="bootstrap.js"></script>
        <script src="jquery-3.5.1.min.js"></script>
    </body>
    </html>