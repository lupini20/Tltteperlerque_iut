<?php


if (session_status() == PHP_SESSION_NONE) { session_start(); }

spl_autoload_register(function ($class_name) {
    include_once ('class/' . $class_name . '.class.php');
});



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

</head>

<body>

<!-- Header Start -->
<header class="navigation">
  <div class="header-top ">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-2 col-md-4">
          <div class="header-top-socials text-center text-lg-left text-md-left">
           <a href="https://www.facebook.com/TLTTEPERLECQUES" aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
        <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
          <div class="header-top-info mb-2 mb-md-0">
          <a href="tel:+33 3 21 95 00 27">Appelez-nous : <span>0321950027</span></a>
            <a href="mailto:tltt.eperlecques@gmail.com"><i class="fas fa-envelope mr-2"></i><span>tltt.eperlecques@gmail.com</span></a>          </div>
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
      
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
              aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
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
                
             
            
                <?php if (isset($_SESSION['FirstName']) && isset($_SESSION['LastName'])) {echo '                        <div class="dropdown">
   <li class="nav-item">
      <a class="nav-link" href="#">Panneau de configuration</a>
   </li>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a href="./admin.php" class="ti-user dropdown-item">  Page admin</a>
    <a class="ti-write dropdown-item" href="#">  Zone entraîneur</a>
    <a class="ti-write dropdown-item" href="./affiche_match.php">  Planning</a>
  </div>
</div>';}?>
            
            <?php if (isset($_SESSION['FirstName']) && isset($_SESSION['LastName'])) {echo "<div class = 'u_info_isCo'><div class='ele1'>".$_SESSION['FirstName']."   ".$_SESSION['LastName']."</div> <div class='ele2'><a href='./deconnexion.php'>Déconnexion</a></div></div>";}else{echo "<span class='u_info_isDeco'><a href = './connexion.php'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-door-open' viewBox='0 0 16 16'>
                <path d='M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z'/>
                <path d='M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z'/>
                </svg>connexion</a></span>";}?>
            </div>

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header Close -->

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Informations</span>
          <h1 class="text-capitalize mb-4 text-lg">Informations & Tarifs</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php" class="text-white">Accueil</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Infos</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section Intro Start -->
<section class="section intro">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="section-title pt-5">
					<span class="h6 text-color ">Les différents documents</span>
					<h2 class="mt-3">Voici les différents documents nécessaires</h2>
				</div>
			</div>

			<div class="col-lg-6 ml-auto">
				<div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="section-text pt-5">
                <ul class ="telechargement_files">
                  <li><a href="./files/fiche_inscription.docx.pdf" download="Fiche_inscription.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg><p>Fiche Inscription</p></a></li>
                  <li><a href="./files/fiche_droit_image.docx.pdf" download="Fiche_droit_image.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg><p>Fiche Droits à l'image</p></a></li>
                  <li><a href="./files/questionnaire-medical-mineur.pdf" download="Fiche_questionnaire_medical_mineur.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg><p>Questionnaire médical mineur</p></a></li>
                  <li><a href="./files/questionnaire-medical-majeur" download="Fiche_questionnaire_medical_majeur.pdf"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg><p></p>Questionnaire médical majeur</a></li>
                </ul>
              </div>
            </div>
			</div>
		</div>
	</div>
</section>
<!-- Section Intro END -->

<!-- Section Pricing Start -->
<section class="section pricing bg-gray position-relative">
	<div class="hero-img bg-overlay h70"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-white">Les Tarifs</span>
					<h2 class="mt-3 content-title text-white"></h2>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card text-center mb-md-0 mb-3">
					<div class="card-body py-5">
						<div class="pricing-header mb-5">
							<h5 class="font-weight-normal mb-3">Jeune loisir SANS pass’sport</h5>
							<h1>25€</h1>
							<p class="text-muted"></p>
						</div>
            <a href="#" class="btn btn-small btn-main mt-3 btn-round-full">Prendre Contact</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center mb-md-0 mb-3">
					<div class="card-body py-5">
						<div class="pricing-header mb-5">
							<h5 class="font-weight-normal mb-3">Jeune loisir AVEC pass’sport</h5>
							<h1>0€</h1>
							<p class="text-muted"></p>
						</div>
						<a href="#" class="btn btn-small btn-main mt-3 btn-round-full">Prendre Contact</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center mb-md-0 mb-3">
					<div class="card-body py-5">
						<div class="pricing-header mb-5">
							<h5 class="font-weight-normal mb-3">Adulte Loisir</h5>
							<h1>35€</h1>
							<p class="text-muted"></p>
						</div>
            <a href="#" class="btn btn-small btn-main mt-3 btn-round-full">Prendre Contact</a>
						
					</div>
				</div>
			</div>
      <div class="col-md-4">
				<div class="card text-center mb-md-0 mb-3">
					<div class="card-body py-5">
						<div class="pricing-header mb-5">
							<h5 class="font-weight-normal mb-3">Jeune, Junior Compétition (licence ftt inclus)</h5>
							<h1>40€</h1>
							<p class="text-muted"></p>
						</div>
            <a href="#" class="btn btn-small btn-main mt-3 btn-round-full">Prendre Contact</a>
						
					</div>
				</div>
			</div>
      <div class="col-md-4">
				<div class="card text-center mb-md-0 mb-3">
					<div class="card-body py-5">
						<div class="pricing-header mb-5">
							<h5 class="font-weight-normal mb-3">Senior Compétition (licence ftt inclus)</h5>
							<h1>60€</h1>
							<p class="text-muted"></p>
						</div>
            <a href="#" class="btn btn-small btn-main mt-3 btn-round-full">Prendre Contact</a>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="cta-block mt-5 p-5 rounded">
			<div class="row justify-content-center align-items-center ">
				<div class="col-lg-7 text-center text-lg-left">
					<span class="text-color">Pour toute(s) autre(s) information(s) à propos des tarifs, n'hésitez pas à nous contacter</span>
					<h2 class="mt-2 text-white">C'est ici -></h2>
				</div>
				<div class="col-lg-4 text-center text-lg-right mt-4 mt-lg-0">
					<a href="contact.html" class="btn btn-main btn-round-full">Contactez nous!</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Pricing End -->

<footer class="footer section">
  <div class="container">
		
	</div>
</section>
<!-- Section Testimonial End -->


<footer class="footer section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">CLUB</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="../files/Mentions_légales.pdf" download="Mentions_légales.pdf">Mentions Légales</a></li>
            <li><a href="contact.html">Aide</a></li>
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
            <li class="list-inline-item"><a href="https://www.facebook.com/TLTTEPERLECQUES"><i class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="plugins/google-map/map.js" defer></script>

<script src="js/script.js"></script>

</body>

</html>