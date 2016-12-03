<?php

foreach($resultats as $unResultat)
{
  echo "<div class=col-lg-6 col-md-6 col-sm-6 col-xs-6>
        <div class=thumbnail>
        <img src=".$unResultat['imageResto']."></p></div></div>";


    echo "<div class=col-lg-6 col-md-6 col-sm-6 col-xs-6>
          <h1>".$unResultat['nomResto']."</h1>"
         ."<p> Type de restaurant : ".$unResultat['libelle']."</p>"
         ."<p> Catégorie Prix : ".$unResultat['catPrix']."</p>"
         ."<p> Nombre de tables disponible : ".$unResultat['nbTables']."</p>"
         ."<p> Nombre de couvert par table : ".$unResultat['nbCouverts']."</p>"
         ."<p> Telephone du restaurant : ".$unResultat['telResto']."</p>"
         ."<p> Heure d'ouverture du restaurant : ".$unResultat['heureOuv']."</p>"
         ."<p> Heure de fermeture du restaurant : ".$unResultat['heureFer']."</p></div>";


  echo "<div class=col-lg-12 col-md-12 col-sm-6 col-xs-12><button type=submit name=MN value=".$unResultat['idResto'].">Voire Menu restaurant</button><hr></div>";

}

?>
