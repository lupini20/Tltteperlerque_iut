<?php


if (session_status() == PHP_SESSION_NONE) { session_start(); }

spl_autoload_register(function ($class_name) {
    include_once ('class/' . $class_name . '.class.php');
});



if($_SESSION['role'] != "ADMIN"){

    header('Location: ./index.php');
    exit();

}

var_dump($_POST);
var_dump($_FILES);


?>