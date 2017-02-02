<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Places disponibles des restaurants </title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="full-slider/css/full-slider.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div class="page">
<div class="container"><!-- au dessus du menu -->
    <div class=" navbar-left inline-form"> <!--�l�ment � gauche--> <a class="logo_wrapper" href="#"><span class="logo"><img src="image/Logo-Restline.png" width="300" height="150"></span></a></div>
    <div class="navbar-right inline-form">
        <p>
            <a href="https://fr.linkedin.com/" ><i class="fa fa-linkedin-square fa-3x" href="#"></i></a>
            <a href="http://facebook.com" ><i class="fa fa-facebook-square fa-3x"></i></a>
            <a href="https://twitter.com/" ><i class="fa fa-twitter-square fa-3x"></i></a>

        </p>
    </div>
</div>

<!-- Menu -->

<nav class="navbar navbar-primary">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <ul class="nav navbar-nav"> <!--met sur une ligne-->
                <li> <a href="index.php"> Accueil </a> </li>
                <li> <a href="Restaurant.php"> Restaurant </a></li>
                <li> <a href="Formulaire_Reserver.php"> Réservation Restaurant </a></li>
            </ul>

        </div>
    </div>

</nav><br />
<!-- Restaurant avec place disponibles -->
<?php
include("MVC_PHP/Controleur/Controleur_site.php");

$unControleur = new affichageResto("localhost", "restline", "root", "");

$resultats = $unControleur -> AffichageRestaurantPlace();

include("MVC_PHP/Vues/Vues_disponibilite_place.php");
 ?>
<footer>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </div>
</footer>

</div>
</body>
</html>
