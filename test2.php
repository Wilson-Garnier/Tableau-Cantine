<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Cantine - Plat du Jour</title>
        <link rel="stylesheet" href="style2.css">

    </head>

<?php



$jour = array ('1'=>'lundi', '2'=>'mardi', '3'=>'mercredi', '4'=>'jeudi', '5'=>'vendredi');



?>

    <body>

    <h1>Menu de la semaine</h1>
    
    <table class="color_line">
        <thead>
        <tr>

<th> Jour</th>   
<th>Entree </th>
<th>Plat </th>
<th>Dessert </th>
<th>Boisson</th>
</thead>
</tr>
   <body>

    <?php

    $repasem=array ("Lundi" =>array("Entree"=>"Salade de carotte","Plat"=>"Carry porc Gros Piment","Dessert"=>"frommage blanc","Boisson"=>"Eau</br>"), 
     "Mardi" =>array("entree"=>"Salade laitue","plat"=>"Poulet roti","dessert"=>"Pomme Verte","Boisson"=>"Eau </br>"), 
    "Mercredi" =>array("entree"=>"Tomate Farçis","plat"=>"Massalé Cabris","dessert"=>"Glace","Boisson"=>"Eau</br>"), 
    "Jeudi" =>array("entree"=>"Salade thon ","plat"=>"Poisson Pané","dessert"=>"Crepes","Boisson"=>"Eau</br>"),
    "Vendredi" =>array("entree"=>"Salade niçoise","plat"=>"Civet Porc","dessert"=>"Creme Brulée","Boisson"=>"Eau</br>"));
   
    
    

        
    ?>
    
    
   <tr>
   <td>
    <?php 
      foreach($repasem as $cle1 => $valeur1)
      {
          echo '<tr>';
          echo'<td>';
           echo" ".$cle1. "<br/><br/>";
           echo'</td>';
          foreach($valeur1 as $cle2 => $valeur2){

          echo'<td>';
          echo" ".$valeur2. "<br/><br/>";
          echo'</td>';
      }
        
      
    ?>
   
    </td>
    
<td>
<form method="Post" action="Modifier.php">
<input type="submit" value="Modifier"/>
</form>
<td>
<form method="Post" action="Supprimer.php">
<input type="submit" value="Supprimer"/>
</form>
<td>
<form method="Post" action="Ajouter.php">
<input type="submit" value="Ajouter"/>
</form>
</td>
<?php
echo'</tr>';
    }
    ?>
    <?php
echo ( '</br>Il y a '.count($repasem)." ".'Repas dans le menu de la semaine');
?>
    </table>
    </body>
    

</html>
