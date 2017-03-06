<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Votre espace de reservation </title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="full-slider/css/full-slider.css" rel="stylesheet">

</head>
<body>
<div class="page">

<!-- dessus navbar -->
<?php include("Include_code/dessus_Navbar.php"); ?>

<!-- Menu -->
<?php include("Include_code/Navbar_co.php"); ?>

<!-- Affichage espace -->
<div class="container">
<?php
include("MVC_PHP/Controleur/Controleur_site.php");
$connexion = new affichageResto("localhost", "restline", "root", "");

if(isset($_SESSION['user']) || $_SESSIOn['mdp'])
{
  include("MVC_PHP/Vues/Vues_Espace.php");

  if(isset($_POST['dec']))
  {
    $connexion-> deconnection();
    header('location:Reservation.php');
  }
  if(isset($_POST['fr']))
  {
    header('location:Formulaire_Reserver.php');
  }
}


 ?>

</div>

<!-- footer -->
<?php include("Include_code/footer.php"); ?>

</div>
</body>
</html>
