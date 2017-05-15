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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<!-- sidebard -->

<div class="container">
    <div class="row">


<!-- Slider -->

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

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
                    <div class="item active">
                        <img src="image/la_fourchette2.jpg" alt="..." style="width: 100%">
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
          </div>
          </div>
          </div>


        <!-- Article -->
        <div class="container-fluid">
        <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
            <h1 style="text-align:center;"> Affichage Top Restaurant </h1>
            </div>
        </div> 
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
<?php include("Include_code/footer.php"); ?>

</div>


<script src="bootstrap3/js/bootstrap.js"></script>
<?php include("Include_code/bar_chargement.php"); ?>

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
