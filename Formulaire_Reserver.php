<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Reservation </title>

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

  <!-- dessus navbar -->
  <?php include("Include_code/dessus_Navbar.php"); ?>

  <!-- Menu -->
  <?php include("Include_code/Navbar_co.php"); ?>

<!-- formulaire pour reservation -->
<?php
  include("MVC_PHP/Controleur/Controleur_site.php");
  $Controleur = new affichageResto("localhost", "restline", "root", "");

  $resultats = $Controleur-> affichageReservation();
  include("MVC_PHP/Vues/Vues_formulaire_reservation.php");

  if(isset($_POST['erg']))
  {
      $dateheure = $Controleur-> DateHeureReservation();
      $nbPersonne = $_POST['nbpers'];
      $idResto = $_POST['idR'];

      $tab = array(

        "date_heure_Reservation" => $dateheure,
        "nbPersonnes" => $nbPersonne,
        "statut" => "En attente",
        "idResto" => $idResto,
        "idClient" => $_SESSION['idClient']

      );

      $Controleur-> insertionReservation($tab);
      echo"insertion reussite";

  }


?>

<!-- footer -->
<?php include("Include_code/footer.php"); ?>


</div>
</div>
</body>
</html>
