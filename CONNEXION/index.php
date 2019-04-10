<?php
// page où on fait la connexion à la DB
require 'sqlconnect.php'; 

$resultat =
    $bdd->query('SELECT * FROM school');
    
//afficher les données de la BD//
//On doit faire un fetch() sur la variable déclarée $resultat ($donnees donnera un ARRAY):
    $donnees = $resultat->fetch();

//Ensuite il suffit de faire un echo sur la variable que tu as déclaré, ici c'est $donnees et la mettre dans une boucle:
    while($donnees =
    $resultat->fetch())
    {
        echo $donnees['school'];
    }
//terminer le traitement de la requête:
    $resultat->closeCursor();

?>