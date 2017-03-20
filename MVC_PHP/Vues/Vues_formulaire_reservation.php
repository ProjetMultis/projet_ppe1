<?php
echo"<fieldset>
      <legend style=text-align:center;>Réservation Restaurant </legend>
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
    <li><a href='mesReservation.php'> Mes Réservations </a></li>
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
  <table class='table table-bordered table-strip'>
    <thead>
      <tr class=success>
        <th> Nom du restaurant  </th>
        <th> Nombre de table disponible  </th>
        <th> Telephone  </th>
        <th> Heure d'ouverture  </th>
        <th> Heure de fermeture  </th>
        <th> Date de la Reservation  </th>
        <th> Nombre de personne</th>
        <th> Réserver  </th>

      </tr>
    </thead>
    <tbody>";

    foreach ($resultats as $Reservation)
    {
      echo"
       <form method=post action='Formulaire_Reserver.php'>
      <tr style='text-align: center;'>
        <td> ".$Reservation['nomResto']." </td>
        <td> ".$Reservation['nbTables']." </td>
        <td> ".$Reservation['telResto']." </td>
        <td> ".$Reservation['heureOuv']." </td>
        <td>".$Reservation['heureFer']." </td>
        <td><input type=date style='cursor: pointer' onclick='new calendar(this);'placeholder='Date de la reservation' name='dr' id='input_".$Reservation['idResto']."' />
        </td>
        <td><input type=number placeholder='Nombre de personne' name='nbpers'  id='input1_".$Reservation['idResto']."'/></td>
        <td><input type='hidden' id='input2_".$Reservation['idResto']."' name='idR' value='".$Reservation['idResto']."'/><button  name='erg' class='btn btn-success btn-sm btn-blockname' id='submit_".$Reservation['idResto']."'  onclick='Verifier_formulaire (this.form)' ><span class='glyphicon  glyphicon-calendar' ></span> Enregistrer Reservation </button></td>
      </tr>
      </form>
      ";
  
   }

    echo"
    </tbody>
    </table>
    </div>
    </div>";



 ?>

