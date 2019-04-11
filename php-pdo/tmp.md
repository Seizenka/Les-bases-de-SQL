<?php

// page où on fait la connexion à la DB   -----se connecte à la base de données weatherapp : check 
require 'index.php';

// On récupère tout le contenu de la table Météo  -----lit le contenu de la table Météo : check
$resultat = $bdd->query('SELECT * FROM Météo');

$donnees = $resultat->fetch();

//afficher les données de la BD   ------affiche un tableau html avec une rangée par rangée du tableau retourné
while($donnees =
    $resultat->fetch())
    {
        echo $donnees['Météo'];

    }

    //terminer le traitement de la requête:
    $resultat->closeCursor();
?>