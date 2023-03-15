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
    <a class="ti-write dropdown-item" href="./affiche_match.php">  Planning</a>
  </div>
</div>';
                  } ?>

                  <?php if (isset($_SESSION['FirstName']) && isset($_SESSION['LastName'])) {
                    echo "<div class = 'u_info_isCo'><div class='ele1'>" . $_SESSION['FirstName'] . "   " . $_SESSION['LastName'] . "</div> <div class='ele2'><a href='./deconnexion.php'>Déconnexion</a></div></div>";
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








  <style>
    body {
      color: #566787;
      background: #f5f5f5;
      font-family: 'Varela Round', sans-serif;
      font-size: 13px;
    }

    .table-responsive {
      margin: 30px 0;
    }

    .table-wrapper {
      min-width: 1000px;
      background: #fff;
      padding: 20px 25px;
      border-radius: 3px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
      margin-top:8em;
    }

    .table-title {
      padding-bottom: 15px;
      background: #156893;
      color: "white";
      padding: 16px 30px;
      margin: -20px -25px 10px;
      border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
      margin: 5px 0 0;
      font-size: 24px;
      color: white;
    }

    .table-title .btn {
      color: #566787;
      float: right;
      font-size: 13px;
      background: #fff;
      border: none;
      min-width: 50px;
      border-radius: 2px;
      border: none;
      outline: none !important;
      margin-left: 10px;
    }

    .table-title .btn:hover,
    .table-title .btn:focus {
      color: #566787;
      background: #f2f2f2;
    }

    .table-title .btn i {
      float: left;
      font-size: 21px;
      margin-right: 5px;
    }

    .table-title .btn span {
      float: left;
      margin-top: 2px;
    }

    table.table tr th,
    table.table tr td {
      border-color: #e9e9e9;
      padding: 12px 15px;
      vertical-align: middle;
    }

    table.table tr th:first-child {
      width: 60px;
    }

    table.table tr th:last-child {
      width: 100px;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
      background: #f5f5f5;
    }

    table.table th i {
      font-size: 13px;
      margin: 0 5px;
      cursor: pointer;
    }

    table.table td:last-child i {
      opacity: 0.9;
      font-size: 22px;
      margin: 0 5px;
    }

    table.table td a {
      font-weight: bold;
      color: #566787;
      display: inline-block;
      text-decoration: none;
    }

    table.table td p {
      margin-left:-1em;
    }

    table.table td a:hover {
      color: #2196F3;
    }

    table.table td a.settings {
      color: #2196F3;
    }

    table.table td a.delete {
      color: #F44336;
    }

    table.table td i {
      font-size: 19px;
    }

    table.table .avatar {
      width: 3em;
      border-radius: 50%;
      vertical-align: middle;
      margin-right: 10px;
    }

    .status {
      font-size: 30px;
      margin: 2px 2px 0 0;
      display: inline-block;
      vertical-align: middle;
      line-height: 10px;
    }

    .text-success {
      color: #10c469;
    }

    .text-info {
      color: #62c9e8;
    }

    .text-warning {
      color: #FFC107;
    }

    .text-danger {
      color: #ff5b5b;
    }

    .pagination {
      float: right;
      margin: 0 0 5px;
    }

    .pagination li a {
      border: none;
      font-size: 13px;
      min-width: 30px;
      min-height: 30px;
      color: #999;
      margin: 0 2px;
      line-height: 30px;
      border-radius: 2px !important;
      text-align: center;
      padding: 0 6px;
    }

    .pagination li a:hover {
      color: #666;
    }

    .pagination li.active a,
    .pagination li.active a.page-link {
      background: #03A9F4;
    }

    .pagination li.active a:hover {
      background: #0397d6;
    }

    .pagination li.disabled i {
      color: #ccc;
    }

    .pagination li i {
      font-size: 16px;
      padding-top: 6px
    }

    .hint-text {
      float: left;
      margin-top: 10px;
      font-size: 13px;
    }
  </style>
  <script>
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
  </head>

  <body>
    <div class="container-xl">
      <div class="table-responsive">
        <div class="table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-5">
                <h2>Gestion des <b>Utilisateurs </b></h2>
              </div>
              <div class="col-sm-7">
                <a href="./form_add_user.php" class="btn btn-secondary"><i class="ti-plus"></i>
                  <span>Ajouter un nouvel utilisateur</span></a>
              </div>
            </div>
          </div>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Nom/Prenom</th>
                <th>Email</th>
                <th>Num</th>
                <th>Licence</th>
                <th>Date de création </th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $user = new User();
              $data_user = $user->getAllUsers();


              foreach ($data_user as $key => $value) {

                $id = $value['id'];
                $image = $value['image_u'];
                $nom = $value['nom_u'];
                $prenom = $value['prenom_u'];
                $date = $value['date_u'];
                $role = $value['role'];
                $etat = $value['etat'];
                $num_licence = $value['num_licence_u'];
                $email = $value['email'];
                $tel = $value['tel_u'];
                $status = $value['status'];


                echo "
                    <tr>
                        <td>$id</td>
                        <td><a href='#'><img src='$image' class='avatar' alt='Avatar'> <p>$prenom $nom</p></a></td>
                        <td>$email</td>
                        <td>0$tel</td>
                        <td>$num_licence</td>
                        <td>$date</td>                        
                        <td>$role</td>
                        <td>"./*<span class='status text-success'>&bull;</span>*/" $status</td>
                        <td>
                            <a href='#' class='settings' title='Settings' data-toggle='tooltip'><i ti-write></i></a>
                            <form action='./del_user.php' method='post'>
                              <input type='hidden' name='id' value='$id' />
                              <button type='submit' id='button_add_user' class='btn btn-primary btn-block'onclick= \"return confirm('Supprimer l utilisateur  $prenom $nom ????');\"
                                style=' margin-bottom:2em; background-color:#156893' ><i
                                class='ti-trash'></i>
                              </button>
                            </form>
                        </td>
                    </tr>
                    ";
              }

              ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <footer class="footer section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget">
              <h4 class="text-capitalize mb-4">CLUB</h4>

              <ul class="list-unstyled footer-menu lh-35">
                <li><a href="../files/Mentions_légales.pdf" download="Mentions_légales.pdf">Mentions Légales</a></li>
                <li><a href="../Projet_pour_Guillaume.rar" download="../Projet_pour_Guillaume.rar">Aide</a></li>
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
    <script src="js/global.js"></script>


  </body>

</html>