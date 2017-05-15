<?php

foreach($resultats as $unResultat)
{
//image
  echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
        <div class=thumbnail>
        <img src=".$unResultat['imageResto']."></p></div></div>";

  //deux tableaux : le premier  de type restaurant a Nombre de couvert par table, le deuxieme de tel a Heure fermeture
  echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
        <h1>".$unResultat['nomResto']."</h1>".
        //premier tableau
        "
        <table class='table table-striped'>
          <thead>
            <tr class=success>
              <th> Type de restaurant : </th>
              <th> Catégorie Prix : </th>
              <th> Nombre de tables disponible : </th>
              <th> Nombre de couvert par table :</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> ".$unResultat['libelle']." </td>
              <td> ".$unResultat['catPrix']." </td>
              <td> ".$unResultat['nbTables']." </td>
              <td> ".$unResultat['nbCouverts']." </td>
            </tr>
          </tbody>
          </table>"
          .//deuxieme tableau
          "
          <table class='table table-striped'>
            <thead>
              <tr class=success>
                <th> Telephone du restaurant : </th>
                <th> Heure d'ouverture du restaurant : </th>
                <th> Heure de fermeture du restaurant : </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> ".$unResultat['telResto']." </td>
                <td> ".$unResultat['heureOuv']." </td>
                <td> ".$unResultat['heureFer']." </td>
              </tr>
            </tbody>
            </table>" //fin des deux tableaux
          ."<a href='Menu.php?idResto=".$unResultat['idResto']."'><button class='btn btn-danger' type=submit name=MN style=''> Voir Plat du jour</button></a>
        </div>";


}
?>
