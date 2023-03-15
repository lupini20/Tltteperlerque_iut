<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

spl_autoload_register(function ($class_name) {
    include_once('class/' . $class_name . '.class.php');
});

function addPresence($id_u, $id_m)
{

    $um = new User_match;
    $um->createUserMatch($id_u, $id_m);
}



if (isset($_POST['id_u']) && isset($_POST['id_m'])) {
    $um = new User_match();
    $is_Present = $um->isPresent($_POST['id_u'], $_POST['id_m']);
    if (intval($is_Present[0]['nb']) === 0) {
        addPresence($_POST['id_u'], $_POST['id_m']);
        header('Location: ./affiche_match.php');
        var_dump("ajout");
    } else {
        header('Location: ./affiche_match.php');
        var_dump("deja present", intval($is_Present[0]['nb']) === 1, $_POST);

    }
} else {
    //header('Location: ./affiche_match.php');
        var_dump("les variables ne sont pas presentes");
}

?>