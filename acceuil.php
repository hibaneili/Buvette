<!DOCTYPE html>
<?php include("connect.php");?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>acceuil</title>
    <script src= "bootstrap.js"></script>
    <script src= "jquery-3-5-1.min.js"></script>
    
    </head>
    <body>
        <div class="container">
       <div class="row">
           <div class="col">
               <div>
           <img src="C:\xampp\htdocs\Buvette\material_projet\img\logo.jpg">
               <h1> EUROBUVETTES</h1>
                   <p> le site de gestion des buvette de l'euro 2016!!</p>
           </div>
               <br>
               <div id="b">
               
                  <a href="accueil.php">Nouveautés</a>     
                  <a  href="statistiques.php"> Statistiques</a>
                 <a  href="recherchemembres.php">Recherche membres</a>
                   <a  href="affectations.php">Affectation</a>
               <a  href="prive.php">Administrateur </a>   
               </div>
             <section id="c" >
                 <?php
$req="select m.idM 'mid', m.date , scoreA, scoreB, a.pays as paysA, a.drapeau as drapeauA, b.pays as paysB, b.drapeau as drapeauB ,count(*)as nb_bo,m.idM
       from `Match` m, `Equipe` a, `Equipe` b, `est_ouverte` eo
        where a.idE = m.eqA
        and b.idE= m.eqB
        and m.idM=eo.idM
        GROUP by m.idM
          ";

$result= mysqli_query($idConnexion,$req);

           ?>      
<table border="1" width="80%" align="center">
               <tbody>
                   <tr>
    <th>date du match</th>
                   <th>Equipe A</th>
                    <th>Equipe B</th>
                    <th>score</th>
                   <th>buvette ouverturs</th>
                   <th>volontaires</th>
                   
    </tr>
                 
                               <?php
//this is a comment



while($row=mysqli_fetch_array($result))
{
    $req_nbv="select count(*)
    from `match` m,`est_present` ep
    where m.idM=".$row['mid'];
   $res=mysqli_query($idConnexion,$req_nbv);
    
$nbv=mysqli_fetch_array($res);
    
  echo"
               <tr>
                 <td>".
      $row['date'].
      "</td>
      
                   <td><img src=\"".$row['drapeauA']."\" alt=\"".$row['paysA']."\" height=\"50px\"/></td>
                    <td><img src=\"".$row['drapeauB']."\" alt=\"".$row['paysB']."\" height=\"50px\"/></td>
                   <td>".$row['scoreA']."-".$row['scoreB']."</td>
                   <td>".$row['nb_bo']."</td>
                     <td>".$nbv[0]."</td>
                  
                 </tr>
";
}

                         ?>
                   
                     </tbody> 
                     </table>
               
                     </section>
               <br> <br><br><br><br>  <br> <br><br><br><br>  <br> <br><br><br><br>  <br> <br><br><br><br>  <br>
               
               <footer id="d">
                   <p id="col"> pied de page</p>
               
              </footer>
           </div>
           </div>
           </div>
     
    </body>
   
</html>