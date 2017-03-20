<?php
echo"<fieldset>
      <legend style=text-align:center;> Mes Réservations </legend>
     </fieldset>
  <div class='btn-group' id=ur>
  <button type='button' class='btn btn-danger'> Menu Compte </button>
  <button type='button' class='btn btn-danger dropdown-toggle' data-toggle='dropdown'>
    <span class='caret'></span>
    <span class='sr-only'>Toggle Dropdown</span>
  </button>
  <ul class=dropdown-menu role=menu>
    <li><a href=#>Connecté en tant que : <strong>" . $_SESSION['user'] . " </strong></li>
    <li class='divider'></li>
    <li><a href=Nouscontacter.php> Nous contacter</a></li>
    <li><a href=Espace.php> Espace </a></li>
    <li><a href='Formulaire_Reserver.php'> Réserver </a></li>
    <li><a href='Disponibilite_place.php'> Places Disponibles </a></li>
    <li class='divider'></li>
    <form method=post action='Deconnection.php'>
    <li><button id=btndec type=submit name=sd class='btn btn-danger dropdown-toggle'>Se deconnecter </button></li>
    </form>
  </ul>
</div>
    ";

   
      echo"
      <div class='table-responsive'>
      <div class='col-lg-12' >
      <table class='table table-bordered table-striped'>
        <thead style='text-align: center;'>
          <tr class=danger>
            <th> Date et heure de la reservation  </th>
            <th> Nombre de Personnes  </th>
            <th> Statut de la reservation  </th>
          </tr>
        </thead>
        <tbody>";

        foreach ($unResultat as $maReservation)
        {
          echo"
           <tr style='text-align: center;'>
              <td>".$Controleur-> retournerdateFrRes($maReservation['date_heure_Reservation'])."</td>
              <td> ".$maReservation['nbPersonnes']." </td>
              <td> ".$Controleur-> mettreAccentSatut($maReservation['statut'])." </td>
            </tr>
          ";

        }

        echo
        "</tbody>
          </table>
          </div>
          </div>";

 ?>
