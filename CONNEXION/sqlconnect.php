<?php
    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', 'user');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }

    // Si tout va bien, on peut continuer


?>

<!-- Notes pour se connecter à MySQL avec PDO :

    Bonne pratique :
    On fait un fichier séparé pour gérer la connexion.


            le nom de l'hôte : c'est l'adresse de l'ordinateur où MySQL est installé
            (comme une adresse IP). Le plus souvent, MySQL est installé sur le même
            ordinateur que PHP : dans ce cas, mettez la valeurlocalhost(cela signifie « sur le même
            ordinateur »). Néanmoins, il est possible que votre hébergeur web vous indique une
            autre valeur à renseigner (qui ressemblerait à ceci :sql.hebergeur.com). Dans ce cas,
            il faudra modifier cette valeur lorsque vous enverrez votre site sur le Web ;

            la base : c'est le nom de la base de données à laquelle vous voulez vous
            connecter. Dans notre cas, la base s'appelle  test . Nous l'avons créée avec
            phpMyAdmin dans le chapitre précédent ;

            le login : il permet de vous identifier. Renseignez-vous auprès de votre
            hébergeur pour le connaître. Le plus souvent (chez un hébergeur gratuit),
            c'est le même login que vous utilisez pour le FTP ;

            Le mot de passe : il y a des chances pour que le mot de passe soit le 
            même que celui que vous utilisez pour accéder au FTP. Renseignez-vous auprès
            de votre hébergeur. 
        
            $bdd : c'est un objet qui représente la connexion à la base de données.
            On crée la connexion en indiquant dans l'ordre dans les paramètres :

                le nom d'hôte (localhost) ;

                la base de données (test) ;

                le login (root) ;

                le mot de passe (sous WAMP il n'y a pas de mot de passe, j'ai donc mis une chaîne vide, sous MAMP 
                le mot de passe estroot).-->