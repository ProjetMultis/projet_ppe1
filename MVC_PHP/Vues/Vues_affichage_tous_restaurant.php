<?php
foreach ($resultats as $lesrestaurants) {


    echo "<div class=col-sm-6 col-md-6 col-lg-6 col-xs-6>
        <img src=".$lesrestaurants['imageResto']."alt= /></div>".
              "<div class=col-sm-6 col-md-6 col-lg-6 col-xs-6>
              <a href='unSeulRestaurant.php?idResto=".$lesrestaurants['idResto']."'><h1>".$lesrestaurants['nomResto']."</h1></a>".
              "<p>".$lesrestaurants['nomRegion']."</p>".
              "<p>".$lesrestaurants['nomVille']."</p>".
              "<p>".$lesrestaurants['libelle']."</p><hr></div>";

}
   ?>
