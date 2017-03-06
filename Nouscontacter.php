<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Nous Contacter </title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="full-slider/css/full-slider.css" rel="stylesheet">
    <script src="http://fonts.googleapis.com/css?family=Roboto:400"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div class="page">

  <!-- dessus navbar -->
  <?php include("Include_code/dessus_Navbar.php"); ?>

  <!-- Menu -->
  <?php include("Include_code/Navbar_co.php"); ?>

<!--formulaire-->

<?php
include("MVC_PHP/Vues/Vues_formulaire.php"); //appelle de la vue pour afficher liste déroulante
include("MVC_PHP/Controleur/Controleur_site.php");

?>

<hr>

<!-- footer -->
<?php include("Include_code/footer.php"); ?>


</div>
</body>
<script>

</script>
</html>
