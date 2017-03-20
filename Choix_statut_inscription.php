<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Choix statut </title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="full-slider/css/full-slider.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- jquery et nprogress -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="nprogress/nprogress.js"></script>
    <link href="nprogress/nprogress.css" rel="stylesheet">


</head>
<body>
<div class="page">
  <!--- dessus navbar -->
  <?php include("Include_code/dessus_Navbar.php"); ?>

<!-- Menu -->
<?php include("Include_code/Navbar_hc.php"); ?>
<!-- inscription utilisateur -->
<?php
  include("MVC_PHP/Vues/Vues_choix_statut.php");
  include("MVC_PHP/Controleur/Controleur_site.php");
  $connexion = new affichageResto("localhost", "restline", "root", "");


 ?>

 <!-- footer -->
 <?php include("Include_code/footer.php"); ?>



</div>

<script src="bootstrap3/js/bootstrap.js"></script>
<?php include("Include_code/bar_chargement.php"); ?>

</body>
</html>
