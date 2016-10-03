<?php
    include "connexion.php";


    function pays ($connexion) {
        $rep = $connexion->prepare(
            'SELECT *
             FROM pays'
        );
        $rep->execute();
        return $rep->fetchALL(PDO::FETCH_ASSOC);
    }

    /*function inserer ($connexion, $nom, $lat, $long, $pop) {
        $rep = $connexion->prepare(
            'INSERT INTO pays(nom, lat, long, pop) 
            VALUES('$nom', '$lat', '$long', '$pop')'
        );
        $rep->execute();
        print_r($rep);
    }*/
?>