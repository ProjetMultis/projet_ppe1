<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

    <title> Menu </title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="full-slider/css/full-slider.css" rel="stylesheet">

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
<!--Menu restaurant-->
<div class="container">
<?php
include("MVC_PHP/Controleur/Controleur_site.php");
$Controleur = new affichageResto("localhost", "restline", "root", "");

if(isset($_GET['idResto']))
{
  $idResto = $_GET['idResto'];
  $resultats = $Controleur-> affichageMenu($idResto);
  include("MVC_PHP/Vues/Vues_affichage_menu.php");

?>
<script type="text/javascript">
    $(document).ready(function(){
        // Activate carousel
        $("#myCarousel").carousel();

        // Enable carousel control
        $(".left").click(function(){
            $("#myCarousel").carousel('prev');
        });
        $(".right").click(function(){
            $("#myCarousel").carousel('next');
        });

        // Enable carousel indicators
        $(".slide_1").click(function(){
            $("#myCarousel").carousel(0);
        });
        $(".slide_2").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".slide_3").click(function(){
            $("#myCarousel").carousel(2);
        });
    });
</script>
<?php
}

 ?>


<script src="bootstrap3/js/bootstrap.js"></script>

<!-- footer -->
<?php include("Include_code/footer.php"); ?>

</div>


</div>

<script src="bootstrap3/js/bootstrap.js"></script>
<?php include("Include_code/bar_chargement.php"); ?>

</body>
</html>
