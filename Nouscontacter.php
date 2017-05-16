<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Nous contacter </title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="full-slider/css/full-slider.css" rel="stylesheet">
    <script src="http://fonts.googleapis.com/css?family=Roboto:400"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!-- jquery et nprogress -->
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

<!-- formulaire particulier -->
<?php
include("MVC_PHP/Vues/Vues_formulaire_message.php");
include("MVC_PHP/Controleur/Controleur_site.php");
$connexion = new affichageResto("localhost", "restline", "root", "");
$tableau = array();

if(isset($_POST['envoyer']))
{

//sauvegarde des données saisie dans des variables

    $auteur =  $_SESSION['user'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    if(strlen($sujet) == 0)
    {
       $tableau['sujet'][] = "<br />
          <div class='alert alert-danger'>
            <a href='Nouscontacter.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'> Sujet Obligatoire </p>
          </div>";
    }

    else if(strlen($sujet) > 50)
    {
      $tableau['sujet'][] = "<br />
          <div class='alert alert-danger'>
            <a href='Nouscontacter.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'> Sujet trop long </p>
          </div>";
    }


    if(strlen($message) == 0)
    {
       $tableau['message'][] = "
          <div class='alert alert-danger'>
            <a href='Nouscontacter.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'> Message Obligatoire </p>
          </div>";
    }
    else if(strlen($message) > 100)
    {
      $tableau['message'][] = "
          <div class='alert alert-danger'>
            <a href='Nouscontacter.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'> Message trop long </p>
          </div>";
    }

    if(count($tableau) == 0)
    {


      $tab = array(
        //données table commentaires
        "auteurCom" => $auteur,
        "sujetCom" => $sujet,
        "texteCom" => $message,
        "idClient" => $_SESSION['idClient']
      );


      $connexion-> insererMessage($tab); //éxécution méthode insererMessage dans le constructeur

      echo"<br />
          <div class='alert alert-success'>
            <a href='Nouscontacter.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'> Message Envoyer : <a href='Espace.php' id=mI> Aller à L'Espace </a></p>
          </div>";
    }

    if (count($tableau) > 0)
    {
      foreach ($tableau as $champEnErreur => $erreursDuChamp) {
        foreach ($erreursDuChamp as $erreur) {
            echo $erreur;
        }
    }
  }



}

 ?>

 <!-- footer -->
 <?php include("Include_code/footer.php"); ?>


</div>

<?php include("Include_code/bar_chargement.php"); ?>

</body>
</html>
