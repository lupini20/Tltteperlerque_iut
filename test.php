<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

spl_autoload_register(function ($class_name) {
    include_once('class/' . $class_name . '.class.php');
});

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
    <title>CvFlashJob</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <style>
        a {
            cursor: pointer;
        }

        a:hover {
            color:
                #fff;
            background:
                firebrick;
            padding: 0 0.5rem;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    $re = array(
        'id' => 999,
        'company' => 'My Worldwide compagny'
    );
    ?>
    <p>
        <span>
            <?php echo $re['company']; ?>
        </span>
    <form action='./del_user.php' method='post'>
        <input type='hidden' name='id' value='$id' />
        <button type='submit' id='button_add_user' class='btn btn-primary btn-block'
            style=' margin-bottom:2em; background-color:#156893' onclick="return confirm('Supprimer la facture n°<?php echo $re['id']; ?>');"><i
                class='ti-trash'></i></button>
    </form>
    </p>
</body>

</html>