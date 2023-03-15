<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

spl_autoload_register(function ($class_name) {
    include_once('class/' . $class_name . '.class.php');
});

function delPresence($id_u, $id_m)
{

    $um = new User_match;
    $um->deleteUserMatch($id_u, $id_m);
}



if (isset($_POST['id_u']) && isset($_POST['id_m'])) {
        delPresence($_POST['id_u'], $_POST['id_m']);
        header('Location: ./affiche_match.php');
} else {
    //header('Location: ./affiche_match.php');
        var_dump("les variables ne sont pas presentes");
}

?>