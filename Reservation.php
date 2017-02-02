<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Connexion compte pour reservation </title>

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

            </button>
            <ul class="nav navbar-nav"> <!--met sur une ligne-->
                <li> <a href="index.php"> Accueil </a> </li>
                <li> <a href="Quisommenous.php"> Qui sommes-nous? </a> </li>
                <li> <a href="Restaurant.php"> Restaurant </a></li>
            </ul>
        </div>
    </div>

</nav><br />
<!--formulaire -->

<?php

include("MVC_PHP/Controleur/Controleur_site.php");
include("MVC_PHP/Vues/Vues_connexion_espace.php");
$tableau = array();
$connexion = new affichageResto("localhost", "restline", "root", "");

if(isset($_POST['envoyer']))
{
  //variable enregistrement clavier
  $email = htmlspecialchars($_POST['email']);
  $mdp = htmlspecialchars($_POST['mdp']);

//----- Partie intialisation requête ------

  //le where de la requête select exemple : where idClient = 2
  $where = array(
      "emailClient" => $email,
      "mdpClient" => $mdp
    );

  //les champs de la requête select exemple : select idClient, nomClient etc..
  $champs = array("idClient", "nomClient", "mdpClient", "emailClient");

  /*appelle de la méthode Connexion_client dans le constructeur pour intialiser la requête selectWhere contenue dans la méthode
  selectWhere du Modele*/
  $unUtilisateur = $connexion-> Connexion_client($champs, $where);

//------- Partie vérification champs --------

  //verification champs email
  if(strlen($email) == 0 ) //si pas d'email tapé
  {
    $tableau['email'][] = "<br />
        <div class='alert alert-danger'>
          <a href='Reservation.php' class=close data-dismiss=alert>&times;</a>
          <p style='text-align: center;'>veuilliez saisir votre email </p>
        </div>";
  }
  else if(!preg_match("#^([a-zA-Z0-9._-]*)@([a-zA-Z0-9._-]*)\.([a-zA-Z]*)$#", $email)) //sinon si email pas au bon format
  {
    $tableau['email'][] = "<br />
        <div class='alert alert-danger'>
            <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'>Email pas au bon format</p>
        </div>";
  }

  //vérification champs mot de passe

  if(strlen($mdp) == 0) //si aucun mot de passe tapé
  {
    $tableau['mdp'][] = "<br />
        <div class='alert alert-danger'>
          <a href='Reservation.php' class=close data-dismiss=alert>&times;</a>
          <p style='text-align: center;'>veuilliez saisir votre mot de passe </p>
        </div>";
  }

  else if($mdp != $unUtilisateur['mdpClient']) //sinon si le mot de passe tapé ne correspond pas au mdp de la base
  {
    $tableau['mdp'][] = "<br />
      <div class='alert alert-danger'>
        <a href='Reservation.php' class=close data-dismiss=alert>&times;</a>
        <p style='text-align: center;'> Mot de passe invalide </p>
      </div>";
  }

// -------- Partie aucune erreurs ou plusieurs erreurs ----------

  if(count($tableau) == 0) //si aucune erreurs trouvé
  {

    $_SESSION['email'] = $email;
    $_SESSION['mdp'] = $mdp;
    $_SESSION['user'] = $unUtilisateur['nomClient'];
    $_SESSION['idClient'] = $unUtilisateur['idClient'];
    header("location:Espace.php");
  }

  if (count($tableau) > 0) //si les les erreurs sont supérieure à 0
  {
    foreach ($tableau as $champEnErreur => $erreursDuChamp)
    {
      foreach ($erreursDuChamp as $erreur)
      {
        echo $erreur;
      }
    }
  }
}
 ?>

<hr>

<!-- Footer -->
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
