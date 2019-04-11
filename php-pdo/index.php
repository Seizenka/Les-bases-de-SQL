<?php 
  try{
    $bdd = new PDO ('mysql:host=localhost; dbname=weatherapp; charset=utf8', 'root', 'user');
}
catch (Exception $e){
    die("Erreur ".$e->getmessage());
}
//Pour afficher le contenu de la base de données
    function afficher(){
    $bdd = new PDO ('mysql:host=localhost; dbname=weatherapp; charset=utf8', 'root', 'user');
    $req = $bdd->query("SELECT * FROM Météo");
    $affiche=$req->fetchAll();
    echo '<table>';
    //Parcourir le tableau
    foreach($affiche as $component){
        echo '<tr>';
        echo '<td><input type="checkbox">'.$component["ville"].'</td>'; 
        echo '<td>'.$component["haut"].'</td>';
        echo '<td>'.$component["bas"].'</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '<input type="submit" value="supprimer" name="supprimer">';
    }
    //Nettoyer les champs
    $sanitisation = array (
        'ville' => FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'haut' => FILTER_VALIDATE_INT, FILTER_SANITIZE_NUMBER_INT,
        'bas' => FILTER_VALIDATE_INT, FILTER_SANITIZE_NUMBER_INT
    );
    $result = filter_input_array(INPUT_POST, $sanitisation);
    //Si le résultat retourné après le filtre est vide ou erreur
    if ($result !=null AND $result!=FALSE){
        echo "ok";
    }
    //Ajout des données dans la base de données
    if (isset($_POST["ajout"])){ //Vaut un onclick 
        $ville = $_POST['ville'];
        $haut=$_POST['haut'];
        $bas=$_POST['bas'];
        $insertion = $bdd->exec("INSERT INTO Météo(ville, haut, bas) VALUES ('$ville', '$haut', '$bas')");
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meteo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <?php afficher()?> <!-- On rappelle la fonction -->
    <form action="#" method="POST">
        <label for="ville">Ville</label>
        <input name="ville" type="text"required>
        <label for="haut">Haut</label>
        <input name="haut" type="number"required>
        <label for="bas">Bas</label>
        <input name="bas" type="number"required>
        <input type="submit" value="ajouter" name="ajout">

    </form>
</body>
</html>

