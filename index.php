<!DOCTYPE html>
<html lang="fr">
<head> <!-- t�te de page -->


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

<title> Restline </title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="full-slider/css/full-slider.css" rel="stylesheet">

</head>

<body>
  <div class="page">
<div class="container"><!-- au dessus du menu -->
    <div class=" navbar-left inline-form"> <!--�l�ment � gauche--> <a class="logo_wrapper" href="index.php"><span class="logo"><img src="image/Logo-Restline.png" width="300" height="150"></span></a></div>
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
            <li> <a href="Quisommenous.php"> Qui sommes-nous? </a> </li>
            <li> <a href="Restaurant.php"> Restaurant </a></li>
            <li> <a href="Reservation.php"> Reservation </a></li>
        </ul>


        </div>
    </div>

</nav><br />

<!-- sidebard -->

<div class="container">
    <div class="row">


<!-- Slider -->

        <div class="col-lg-12 col-md-9 col-sm-9 col-xs-9">

            <div class="row marge-bas">

                <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                    <div class="bs-example">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" >
                <!-- Indicateur -->
                <ol class="carousel-indicators">
                    <li class="slide_1 active"></li>
                    <li class="slide_2"></li>
                    <li class="slide_3"></li>
                </ol>

                <!-- Image pour le slider -->
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="image/la_fourchette2.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>Restaurant la Fourchette</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/les_marches2.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>Restaurant les marches</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/Onoto2.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>Restaurant Onoto</h3>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Controle pour ce diriger sur le slider -->
                        <a class="carousel-control left">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="carousel-control right">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
            </div>
            </div>
            </div>
          </div>



        <!-- Article -->
        <div class="container-fluid">
        <div class="row">
        <h1> __________________ Affichage Top Restaurant _________________ </h1>
      <br />
        <?php
        include("MVC_PHP/Controleur/Controleur_site.php");

        $unControleur = new affichageResto("localhost", "restline", "root", "");

        $resultats = $unControleur -> AffichageRestaurant();



        include("MVC_PHP/Vues/Vues_affichage_restaurant.php")
         ?>
       </div>
     </div>


<!-- footer -->



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

</diV>
<script src="bootstrap3/js/bootstrap.js"></script>
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

</body>
</html>
