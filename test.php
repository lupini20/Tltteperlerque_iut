<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

spl_autoload_register(function ($class_name) {
    include_once('class/' . $class_name . '.class.php');
});


function idMatch($libelle){

    $m= new Match_eq;
    $retour = $m->getIdMatch($libelle);
    return $retour;
  }


$test = idMatch('Poule 6 - tour n°1 du 22/01/2023');
var_dump($test[0]['id_match']);

?>

