<?php include "connexion.php"; ?>
<?php include "fonctions.php"; ?>

<?php
    if (isset($_POST["send"])) {
        if (isset($_POST["nom"]) && isset($_POST["lat"]) && isset($_POST["long"]) && isset($_POST["pop"])) {
            print_r($_POST);
            
            $nom = $_POST["nom"];
            $lat = $_POST["lat"];
            $long = $_POST["long"];
            $pop = $_POST["pop"];
            
            $rep = $connexion->prepare(
            'INSERT INTO pays(nom, lat, long, pop) 
            VALUES(:nom, :lat, :long, :pop);'
            );
            
            $rep->execute(array(
                'nom' => $nom,
                'lat' => $lat,
                'long' => $long,
                'pop' => $pop,
            ));
            
            print_r($rep);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Srilanka Ajout</title>
</head>
<body>
    <form method="post" action="ajout.php">
        <label for="nom">
            Nom : <input type="text" name="nom">
        </label>
        <label for="lat">
            Latitude : <input type="text" name="lat">
        </label>
        <label for="long">
            Longitude : <input type="text" name="long">
        </label>
        <label for="pop">
            Population : <input type="text" name="pop">
        </label>
        <input type="submit" value="Ajouter à la BDD" name="send"/>
    </form>
</body>
</html>