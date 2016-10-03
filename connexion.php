<?php
    $host = "localhost";
    $dbname = "srilanka";
    $user = "root";
    $pass = "root";
    try {
        $connexion = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $pass);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>