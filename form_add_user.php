<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

spl_autoload_register(function ($class_name) {
    include_once('class/' . $class_name . '.class.php');
});




if ($_SESSION['role'] != "ADMIN") {

    header('Location: ./index.php');
    exit();

}


?>

<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">

<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>TLTTEperlecques</title>

  <!-- ** Mobile Specific Metas ** -->
  
  <!-- Main Stylesheet -->
  <head>

<!-- ** Basic Page Needs ** -->
<meta charset="utf-8">
<title>TLTTEperlecques</title>

<!-- ** Mobile Specific Metas ** -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Agency HTML Template">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
<meta name="author" content="Themefisher">
<meta name="generator" content="Themefisher Html5 Agency Template v1.0">

<!-- bootstrap.min css -->
<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
<!-- Icon Font Css -->
<link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="plugins/slick/slick.css">
<link rel="stylesheet" href="plugins/slick/slick-theme.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="./css/style.css">

<!--Favicon-->
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
  integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
  crossorigin="" />
<link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
<link rel="stylesheet" type="text/css"
  href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />

<style type="text/css">
  #map {
    /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
    height: 400px;
    width: 80%;
    margin-top: 5em;
    margin: auto;
    display: block;



  }

  .map_container {

    border-width: 1px;
    border-style: solid;
    border-color: black;


  }
</style>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7834018884545942"
  crossorigin="anonymous"></script>

</head>

<body>

<!-- Header Start -->
<header class="navigation">
  <div class="header-top ">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-2 col-md-4">
          <div class="header-top-socials text-center text-lg-left text-md-left">
            <a href="https://www.facebook.com/TLTTEPERLECQUES" aria-label="facebook"><i
                class="fab fa-facebook-f"></i></a>
          </div>
        </div>
        <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
          <div class="header-top-info mb-2 mb-md-0">
            <a href="tel:+33 3 21 95 00 27">Appelez-nous : <span>0321950027</span></a>
            <a href="mailto:tltt.eperlecques@gmail.com"><i
                class="fas fa-envelope mr-2"></i><span>tltt.eperlecques@gmail.com</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="navbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg px-0 py-4">
            <a class="navbar-brand" href="index.php">
              TLTT<span>Eperlecques</span>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
              data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="membres_club.php">Membres du club</a>
                </li>
                <li class="nav-item @@service"><a class="nav-link" href="photo.php">Photos</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="infos.php">Infos</a>
                </li>
                <li class="nav-item @@contact"><a class="nav-link" href="contact.php">Contact</a></li>



                <?php if (isset($_SESSION['FirstName']) && isset($_SESSION['LastName'])) {
                  echo '                        <div class="dropdown">
 <li class="nav-item">
    <a class="nav-link" href="#">Panneau de configuration</a>
 </li>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a href="./admin.php" class="ti-user dropdown-item">  Page admin</a>
  <a class="ti-write dropdown-item" href="#">  Zone entraîneur</a>
  <a  href="./affiche_match.php" class="ti-write dropdown-item" >  Planning</a>
</div>
</div>';
                } ?>

                <?php if (isset($_SESSION['FirstName']) && isset($_SESSION['LastName'])) {
                  echo "<div class = 'u_info_isCo'><div class='ele1'>" . $_SESSION['FirstName'] . "   " . $_SESSION['LastName'] . "</div> <div class='ele2'><a  href='./deconnexion.php'>Déconnexion</a></div></div>";
                } else {
                  echo "<span class='u_info_isDeco'><a href = './connexion.php'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-door-open' viewBox='0 0 16 16'>
              <path d='M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z'/>
              <path d='M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z'/>
              </svg>connexion</a></span>";
                } ?>
            </div>

            </ul>
          </nav>


        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header Close -->




     <br> <br>


    <div class="container">
        <br>






        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Créer un compte utilisateur</h4>
                <form action="#" method="post" enctype="multipart/form-data">
                    Sélectionnez l'image que vous souhaitez télécharger:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>

                <?php
                if (isset($_FILES["fileToUpload"])) {
                    $target_dir = "./images/joueur/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



                    // Check if image file is a actual image or fake image
                    if (isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        if ($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    }

                    // Check if file already exists
                    if (file_exists($target_file)) {
                        echo "Désolé un fichier sous le même nom existe déjà";
                        $uploadOk = 0;
                    }

                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 500000) {
                        echo "Désolé votre image est trop grande veuillez la compresser";
                        $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        echo "Désolé seulement les formats JPG, JPEG, PNG & GIF sont acceptés.";
                        $uploadOk = 0;
                    }

                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "SDésolé votre image n'a pas pu être téléchargée";
                        // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $_SESSION['nom_photo'] = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
                            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Désolé, il ya eu une erreur lors du téléchargement";
                        }
                    }
                }
                ?>
                <br>
                <form action="#" method="post">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="num_licence" class="form-control" placeholder="Numéro de licence" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="nom" class="form-control" placeholder="Nom" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="prenom" class="form-control" placeholder="Prénom" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="mail" class="form-control" placeholder="Email" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select" style="max-width: 120px;">
                            <option selected="">+33</option>
                        </select>
                        <input name="telephone" class="form-control" placeholder="Numéro de téléphone" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                        </div>
                        <select class="form-control" name="status">
                            <option value="Simple Joueur">Simple Joueur</option>
                            <option value="Capitaine">Capitaine</option>
                        </select>
                    </div> <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                        </div>
                        <select class="form-control" name="role">
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div> <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Mot de passe" type="password" name="password">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Répéter le mot de passe" type="password">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" style="background-color:#156893">Créer</button>
                    </div> <!-- form-group// -->
                </form>

                <?php


                if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['telephone']) && isset($_POST['status']) && isset($_POST['role']) && isset($_POST['password'])) {

                    $user = new User();

                    $options = [
                        'cost' => 12,
                    ];

                    $res = $user->createUser($_POST['num_licence'],$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['telephone'], $_POST['status'], $_POST['role'], $_POST['password'], $_SESSION['nom_photo']);

                    if ($res = 1) {
                        echo "utilisateur enregistré";
                    } else {
                        echo "erreur lors de l'enregistrement";
                    }

                }




                ?>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->









    <footer class="footer section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget">
                        <h4 class="text-capitalize mb-4">CLUB</h4>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="../files/Mentions_légales.pdf" download="Mentions_légales.pdf">Mentions
                                    Légales</a></li>
                            <li><a href="../Projet_pour_Guillaume.rar" download="../Projet_pour_Guillaume.rar">Aide</a>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget">
                        <h4 class="text-capitalize mb-4">LIENS RAPIDES</h4>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="membresduclub.php">Membres du club</a></li>
                            <li><a href="photo.php">Photos</a></li>
                            <li><a href="infos.php">Infos</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <div class="logo mb-4">
                            <h3>TTLT<span>Eperlecques</span></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm pt-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            TLTT Eperlecques
                        </div>
                    </div>
                    <div class="col-lg-6 text-left text-lg-right">
                        <ul class="list-inline footer-socials">
                            <li class="list-inline-item"><a href="https://www.facebook.com/TLTTEPERLECQUES"><i
                                        class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Scroll to top-->
    <div id="scroll-to-top" class="scroll-to-top">
        <span class="icon fa fa-angle-up"></span>
    </div>


    <!-- 
Essential Scripts
=====================================-->
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/map.js" defer></script>

    <script src="js/script.js"></script>

</body>

</html>