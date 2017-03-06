<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Professionnel </title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="full-slider/css/full-slider.css" rel="stylesheet">
    <script src="http://fonts.googleapis.com/css?family=Roboto:400"></script>

</head>
<body>
<div class="page">

  <!-- dessus navbar -->
  <?php include("Include_code/dessus_Navbar.php"); ?>

  <!-- Menu -->
  <?php include("Include_code/Navbar_co.php"); ?>

<!-- formulaire professionnel -->
<?php
  include("MVC_PHP/Vues/Vues_formulaire_professionnel.php");
  include("MVC_PHP/Controleur/Controleur_site.php");
  $connexion = new affichageResto("localhost", "restline", "root", "");
  $tableau = array();

  if(isset($_POST['envoyer']))
  {
    $nom = $_POST['nom'];

    if(strlen($nom) == 0)
      {
        $tableau['nom'][] = "<br />
            <div class='alert alert-danger'>
              <a href='Professionnel.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>noms obligatoire</p>
            </div>";
      }

    else if($nom != is_string($nom))
      {
        $tableau['nom'][] = "<br />
              <div class='alert alert-danger'>
                <a href='Professionnel.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Le nom n'est pas au bon format</p>
              </div>";
      }

    $prenomContact = $_POST['pc'];

    if(strlen($prenomContact) == 0)
      {
        $tableau['pc'][] = "<br />
            <div class='alert alert-danger'>
              <a href='Professionnel.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>prenoms du contact obligatoire</p>
            </div>";
      }

    else if($prenomContact != is_string($prenomContact))
      {
        $tableau['pc'][] = "<br />
              <div class='alert alert-danger'>
                <a href='Professionnel.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'> Le nom du contact n'est pas au bon format </p>
              </div>";
      }

    $nomContact = $_POST['nc'];

    if(strlen($nomContact) == 0)
      {
        $tableau['nc'][] = "<br />
            <div class='alert alert-danger'>
              <a href='Professionnel.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>noms du contact obligatoire</p>
            </div>";
      }

    else if($nomContact != is_string($nomContact))
      {
        $tableau['nc'][] = "<br />
              <div class='alert alert-danger'>
                <a href='Professionnel.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Le nom du contact  n'est pas au bon format</p>
              </div>";
      }

    $Siret = $_POST['ns'];

    if(strlen($Siret) == 0)
      {
        $tableau['ns'][] = "<br />
            <div class='alert alert-danger'>
              <a href='Professionnel.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>Le Siret est obligatoire</p>
            </div>";
      }

    else if(is_integer($Siret))
      {
        $tableau['ns'][] = "<br />
              <div class='alert alert-danger'>
                <a href='Professionnel.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Le siret  n'est pas au bon format</p>
              </div>";
      }

    $email = $_POST['mail'];

    if(strlen($email) == 0)
      {
        $tableau['mail'][] = "<br />
            <div class='alert alert-danger'>
              <a href='Particulier.php' class=close data-dismiss=alert>&times;</a>
              <p style='text-align: center;'>Email obligatoire</p>
            </div>";
      }

    else if(!preg_match("#^([a-zA-Z0-9._-]*)@([a-zA-Z0-9._-]*)\.([a-zA-Z]*)$#", $email))
        {
          $tableau['mail'][] = "<br />
                <div class='alert alert-danger'>
                  <a href='Particulier.php' class=close data-dismiss=alert>&times;</a>
                  <p style='text-align: center;'>Email pas au bon format</p>
                </div>";
        }

    $Telephone = $_POST['tel'];

    if(is_integer($Telephone))
        {
          $tableau['tel'][] = "<br />
              <div class='alert alert-danger'>
                <a href='Particulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Format du telephone invalide</p>
              </div>";
        }

    $Rue = $_POST['Rue'];
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
                <a href='Particulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Format du code postal invalide</p>
              </div>";
        }

    else if(strlen($code_postal) != 5 && $code_postal > 0)
        {
          $tableau['code_postal'][] = "<br />
              <div class='alert alert-danger'>
                <a href='Particulier.php' class=close data-dismiss=alert>&times;</a>
                <p style='text-align: center;'>Code postal invalide</p>
              </div>";
        }

    $auteur = $_POST['nom'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    if($sujet != is_string($sujet) && $sujet > 0)
    {
      $tableau['sujet'][] = "<br />
          <div class='alert alert-danger'>
            <a href='Particulier.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'>Format sur le champ sujet invalide</p>
          </div>";
    }

    else if($sujet > 50)
    {
      $tableau['sujet'][] = "<br />
          <div class='alert alert-danger'>
            <a href='Particulier.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'> Sujet trop long </p>
          </div>";
    }

    if($message != is_string($message) && $sujet > 0)
    {
      $tableau['message'][] = "<br />
          <div class='alert alert-danger'>
            <a href='Particulier.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'>Format sur le champ Message invalide</p>
          </div>";
    }

    else if($message > 100)
    {
      $tableau['message'][] = "<br />
          <div class='alert alert-danger'>
            <a href='Particulier.php' class=close data-dismiss=alert>&times;</a>
            <p style='text-align: center;'> Message trop long </p>
          </div>";
    }

    if(count($tableau) == 0)
    {
      $tab = array(
        "nomClient" => $nom,
        "prenomContact" => $prenomContact,
        "nomContact" => $nomContact,
        "numSiret" => $Siret,
        "emailClient" => $email,
        "numTelClient" => $Telephone,
        "rue" => $Rue,
        "ville" => $ville,
        "cp" => $code_postal,
        "mdpClient" => $_SESSION['mdp']

      );

      $connexion->insererProfessionnel($tab);



      $tab2 = array(
        "auteurCom" => $auteur,
        "sujetCom" => $sujet,
        "texteCom" => $message,
        "idClient" => $_SESSION['idClient']

      );


      $connexion->insererMessage($tab2);

      $message = "<p>donnees inserer</p>";
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
<script>

</script>
</html>
