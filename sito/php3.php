<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomeutente = $_POST['nomeutente'];
    $password = $_POST['password'];
     $eta = $_POST['eta'];
    if ($nomeutente == "Fabio" && $password == "2106" && $eta == "21") {
        echo "Benvenuto $nomeutente nella pagina riservata del sito!";
    } else {
        echo "Attenzione: credenziali non corrette.";
    }
}
?>