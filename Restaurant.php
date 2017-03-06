<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Restaurant </title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="full-slider/css/full-slider.css" rel="stylesheet">

</head>
<body>
<div class="page">
  <!--- dessus navbar -->
  <?php include("Include_code/dessus_Navbar.php"); ?>

<!-- Menu -->

<?php include("Include_code/Navbar_hc.php"); ?>

<!--Article-->
<div class="container-fluid">
<div class="row">
<?php
include("MVC_PHP/Controleur/Controleur_site.php");

$unControleur = new affichageResto("localhost", "restline", "root", "");


$resultats = $unControleur -> Affichagetoutrestaurant();



include("MVC_PHP/Vues/Vues_affichage_tous_restaurant.php")
 ?>

</div>

</div>



<!-- footer -->
<?php include("Include_code/footer.php"); ?>

</div>
</body>
</html>
