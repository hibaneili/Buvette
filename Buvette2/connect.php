<?php
    $serveurBD="localhost";
     $nomUtilisateur="root";
     $motDePasse="";
     $baseDeDonnees="dsi-buvette";

     $idConnexion=mysqli_connect($serveurBD,$nomUtilisateur,$motDePasse) 
         or die(" Problemme de connexion a la base !!");

      $connexionBase = mysqli_select_db($idConnexion,$baseDeDonnees)
         or die(" Problemme de selection a la base !!");

?>