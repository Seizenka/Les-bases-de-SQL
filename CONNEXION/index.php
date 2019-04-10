<?php
// page où on fait la connexion à la DB
require 'sqlconnect.php'; 

// On récupère tout le contenu de la table school
$resultat = $bdd->query('SELECT * FROM school');

//afficher les données de la BD//
//On doit faire un fetch() sur la variable déclarée $resultat ($donnees donnera un ARRAY):
//fetch en anglais signifie « va chercher ».
//Pour récupérer une entrée, on prend le résultat de MySQL et on y exécute fetch(), ce qui nous renvoie la première ligne.
    $donnees = $resultat->fetch();

//Ensuite il suffit de faire un echo sur la variable que tu as déclaré, ici c'est $donnees et la mettre dans une boucle:
//// On affiche chaque entrée une à une
    while($donnees =
    $resultat->fetch())
    {
        echo $donnees['school'];
    }
//terminer le traitement de la requête:
    $resultat->closeCursor();

?>

<!-- Notes openclassroom :
            $donnees est un array qui contient champ par champ les valeurs de 
            la première entrée. Par exemple, si vous vous intéressez au champ console, 
            vous utiliserez l'array $donnees['console'].

            Il faut faire une boucle pour parcourir les entrées une à une.
            Chaque fois que vous appelez $reponse->fetch(), vous passez à l'entrée suivante.
            La boucle est donc répétée autant de fois qu'il y a d'entrées dans votre table.
            
            -->