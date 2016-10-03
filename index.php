<?php include "connexion.php"; ?>
<?php include "fonctions.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Srilanka</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <div>
    <?php foreach (pays($connexion) as $key=>$value) {?>
        <ul><li><?php echo $value["nom"]; ?></li>
        <ul><li><?php echo $value["lat"]; ?></li>
        <li><?php echo $value["long"]; ?></li>
        <li><?php echo $value["pop"]; ?></li></ul></ul>
    <?php } ?>
    </div>
    <a href="ajout.php">Vous voulez ajouter votre ville ?</a>
</body>
</html>