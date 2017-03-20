<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Mes Reservations </title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="full-slider/css/full-slider.css" rel="stylesheet">

    <!-- jquery et nprogress(bar youtube en haut de la page) -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="nprogress/nprogress.js"></script>
    <link href="nprogress/nprogress.css" rel="stylesheet">

</head>
<body>
<div class="page">

<!-- dessus navbar -->
<?php include("Include_code/dessus_Navbar.php"); ?>

<!-- Menu -->
<?php include("Include_code/Navbar_co.php"); ?>

<!-- Affichage Tableaux mes reservations -->
<div class="container">
  <?php

  include("MVC_PHP/Controleur/Controleur_site.php");

  $Controleur = new affichageResto("localhost", "restline", "root", "");

  $where = array(
    "idClient" => $_SESSION['idClient']
  );

  $champs = array("date_heure_Reservation", "nbPersonnes", "statut");

  $unResultat = $Controleur-> AffichageMaReservation($champs, $where);
  include("MVC_PHP/Vues/Vues_mesReservation.php");

  ?>
</div>

<!-- footer -->
<?php include("Include_code/footer.php"); ?>

</div>


<script src="bootstrap3/js/bootstrap.js"></script>
<?php include("Include_code/bar_chargement.php"); ?>

</body>
</html>
