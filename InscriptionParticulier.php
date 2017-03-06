<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Inscription Particulier </title>

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
  <!--- dessus navbar -->
  <?php include("Include_code/dessus_Navbar.php"); ?>

<!-- Menu -->
<?php include("Include_code/Navbar_hc.php"); ?>
<!-- inscription Particulier -->
<?php
  include("MVC_PHP/Vues/Vues_inscription_particulier.php");
  include("MVC_PHP/Controleur/Controleur_site.php");
  $connexion = new affichageResto("localhost", "restline", "root", "");
  $tableau = array();

  if(isset($_POST['enrgp']) > 0)
  {

    $nom = $_POST['nom'];

    if(strlen($nom) == 0)
      {
        $tableau['nom'][] = "
            <div class='alert alert-danger'>
              <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>noms obligatoire</p>
            </div>";
      }

    else if($nom != is_string($nom))
      {
        $tableau['nom'][] = "
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Le nom n'est pas au bon format</p>
              </div>";
      }

    $prenom = $_POST['prenom'];

    if(strlen($prenom) == 0)
      {
        $tableau['prenom'][] = "
            <div class='alert alert-danger'>
              <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>prenoms obligatoire</p>
            </div>";
      }

    else if($prenom != is_string($prenom))
      {
        $tableau['prenom'][] = "
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Ceci n'est pas une chaine de caractère</p>
              </div>";
      }

    $email = $_POST['mail'];

    if(strlen($email) == 0)
      {
        $tableau['mail'][] = "
            <div class='alert alert-danger'>
              <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>Email obligatoire</p>
            </div>";
      }

    else if(!preg_match("#^([a-zA-Z0-9._-]*)@([a-zA-Z0-9._-]*)\.([a-zA-Z]*)$#", $email))
        {
          $tableau['mail'][] = "
                <div class='alert alert-danger'>
                  <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                  <p style='text-align: center;'>Email pas au bon format</p>
                </div>";
        }

    $telephone = $_POST['tel'];

    if(is_integer($telephone))
        {
          $tableau['tel'][] = "
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
          $tableau['ville'][] = "
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Format de la ville invalide</p>
              </div>";
        }
    if(is_integer($code_postal))
        {
          $tableau['code_postal'][] = "
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Format du code postal invalide</p>
              </div>";
        }

    else if(strlen($code_postal) != 5 && $code_postal > 0)
        {
          $tableau['code_postal'][] = "
              <div class='alert alert-danger'>
                <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Code postal invalide</p>
              </div>";
        }

    $mdp = $_POST['mdp'];
    $rmdp = $_POST['rmdp'];

    if(strlen($mdp) == 0)
      {
        $tableau['mdp'][] = "
            <div class='alert alert-danger'>
              <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>mot de passe obligatoire</p>
            </div>";
      }

    else if(strlen($rmdp) == 0)
      {
        $tableau['rmdp'][] = "
            <div class='alert alert-danger'>
              <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>Retaper le mot de passe est obligatoire</p>
            </div>";
      }

    else if($mdp != $rmdp)
      {
            $tableau['mdp'][] = "
                <div class='alert alert-danger'>
                  <a href='InscriptionParticulier.php' class=close data-dismiss=alert>&times;</a>
                  <p style='text-align: center;'> les deux mots de passe doit être identiques</p>
                </div>";
      }

    if(count($tableau) == 0)
    {
      $tab = array(
        "nomClient" => $nom,
        "prenom" => $prenom,
        "emailClient" => $email,
        "numTelClient" => $telephone,
        "cp" => $code_postal,
        "rue" => $rue,
        "mdpClient" => $mdp,
        "ville" => $ville

      );

      $connexion-> insererParticulier($tab);

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

 <!-- footer -->
 <?php include("Include_code/footer.php"); ?>


</div>
</body>
</html>
