<?php


if (session_status() == PHP_SESSION_NONE) { session_start(); }

spl_autoload_register(function ($class_name) {
    include_once ('class/' . $class_name . '.class.php');
});



if($_SESSION['role'] != "ADMIN"){

    header('Location: ./index.php');
    exit();

}

$usr = new USER();

if($_POST['id'] != $_SESSION['id']){
    $usr->deleteUser($_POST['id']);
}
header('Location: ./admin.php');

var_dump($_POST['id']);
var_dump($_SESSION['id']);



?>