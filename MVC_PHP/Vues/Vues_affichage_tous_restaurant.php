<?php

foreach ($resultats as $lesrestaurants) {


    echo "<div class='col-sm-2 col-md-2 col-lg-2 col-xs-2'>
          <img class=img-responsive src=".$lesrestaurants['imageResto']."></div>".
              "<div id=txt class='col-sm-10 col-md-10 col-lg-10 col-xs-10'>
              <a href='unSeulRestaurant.php?idResto=".$lesrestaurants['idResto']."'><h1>".$lesrestaurants['nomResto']."</h1></a>".
              "<p>".$lesrestaurants['nomRegion']."</p>".
              "<p>".$lesrestaurants['nomVille']."</p>".
              "<p>".$lesrestaurants['libelle']."</p><hr></div>";

}
   ?>
