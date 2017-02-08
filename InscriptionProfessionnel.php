<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Inscription Professionnel</title>

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
<!-- inscription utilisateur -->
<?php
  include("MVC_PHP/Vues/Vues_inscription_professionnel.php");
  include("MVC_PHP/Controleur/Controleur_site.php");
  $connexion = new affichageResto("localhost", "restline", "root", "");

  $tableau = array();

  if(isset($_POST['engip']) > 0)
  {

    $nom = $_POST['nom'];

    if(strlen($nom) == 0)
      {
        $tableau['nom'][] = "<br />
            <div class='alert alert-danger'>
              <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>noms obligatoire</p>
            </div>";
      }

    else if($nom != is_string($nom))
      {
        $tableau['nom'][] = "<br />
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Le nom n'est pas au bon format</p>
              </div>";
      }

    $ns = $_POST['ns'];

    if(strlen($ns) == 0)
      {
        $tableau['ns'][] = "<br />
            <div class='alert alert-danger'>
              <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>numero siret obligatoire</p>
            </div>";
      }

    else if($ns != is_string($ns))
      {
        $tableau['ns'][] = "<br />
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Ceci n'est pas une chaine de caractère</p>
              </div>";
      }

      $nomContact = $_POST['nc'];

      if(strlen($nomContact) == 0)
        {
          $tableau['nc'][] = "<br />
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Nom obligatoire</p>
              </div>";
        }

      else if($nomContact != is_string($nomContact))
        {
          $tableau['nc'][] = "<br />
                <div class='alert alert-danger'>
                  <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                  <p style='text-align: center;'>Ceci n'est pas une chaine de caractère</p>
                </div>";
        }

        $prenomContact = $_POST['np'];

      if(strlen($prenomContact) == 0)
          {
            $tableau['np'][] = "<br />
                <div class='alert alert-danger'>
                  <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                  <p style='text-align: center;'>Prenom du contact obligatoire</p>
                </div>";
          }

      else if($prenomContact != is_string($prenomContact))
          {
            $tableau['np'][] = "<br />
                  <div class='alert alert-danger'>
                    <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                    <p style='text-align: center;'>Ceci n'est pas une chaine de caractère</p>
                  </div>";
          }



    $email = $_POST['mail'];

    if(strlen($email) == 0)
      {
        $tableau['mail'][] = "<br />
            <div class='alert alert-danger'>
              <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>Email obligatoire</p>
            </div>";
      }

    else if(!preg_match("#^([a-zA-Z0-9._-]*)@([a-zA-Z0-9._-]*)\.([a-zA-Z]*)$#", $email))
        {
          $tableau['mail'][] = "<br />
                <div class='alert alert-danger'>
                  <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                  <p style='text-align: center;'>Email pas au bon format</p>
                </div>";
        }

    $telephone = $_POST['tel'];

    if(is_integer($telephone))
        {
          $tableau['mail'][] = "<br />
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Format du telephone invalide</p>
              </div>";
        }

    $rue = $_POST['Rue'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];

    if(is_integer($ville))
        {
          $tableau['code_postal'][] = "<br />
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Format de la ville invalide</p>
              </div>";
        }

    if(is_integer($code_postal))
        {
          $tableau['code_postal'][] = "<br />
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Format du code postal invalide</p>
              </div>";
        }

    else if(strlen($code_postal) < 5 || strlen($code_postal) > 5)
        {
          $tableau['code_postal'][] = "<br />
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Code postal invalide</p>
              </div>";
        }

    $mdp = $_POST['mdp'];
    $rmdp = $_POST['rmdp'];

    if(strlen($mdp) == 0)
      {
        $tableau['mdp'][] = "<br />
            <div class='alert alert-danger'>
              <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>mot de passe obligatoire</p>
            </div>";
      }

    else if(strlen($rmdp) == 0)
      {
        $tableau['rmdp'][] = "<br />
            <div class='alert alert-danger'>
              <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>Retaper le mot de passe est obligatoire</p>
            </div>";
      }

    else if($mdp != $rmdp)
      {
            $tableau['mdp'][] = "<br />
                <div class='alert alert-danger'>
                  <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                  <p style='text-align: center;'> les deux mots de passe doit être identiques</p>
                </div>";
      }

    if(count($tableau) == 0)
    {
      $tab = array(
        "nomClient" => $nom,
        "numSiret" => $ns,
        "nomContact" => $nomContact,
        "prenomContact" => $prenomContact,
        "emailClient" => $email,
        "numTelClient" => $telephone,
        "cp" => $code_postal,
        "rue" => $rue,
        "mdpClient" => $mdp,
        "ville" => $ville

      );

      $connexion-> insererProfessionnel($tab);

      echo"<br />
          <div class='alert alert-success'>
            <a href='inscription_compte.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'>Inscription réussite : <a href='Reservation.php' id=mI> Aller à la page de connexion </a></p>
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
<footer>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </div>
</footer>


</div>
</div>
</body>
</html>
