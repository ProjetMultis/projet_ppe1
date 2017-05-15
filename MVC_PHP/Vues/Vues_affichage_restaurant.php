  <?php

  foreach($resultats as $lesResultats)
  {
    echo "<div class='col-sm-4 col-md-4 col-lg-4 col-xs-3'>
          <div class=thumbnail>
          <img src=".$lesResultats['imageResto']." alt= />"
        ."<div class=caption><h3>".$lesResultats['nomResto']."</h3>"
        ."<p>".$lesResultats['nomRegion'].
        " - ".$lesResultats['nomVille']."</p>"
        ."<p class =pull-left> Type de restaurant : ".$lesResultats['libelle'].
        " </p></div></div></div>";
  }

   ?>
