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
    <li class='divider'></li>
    <form method=post action='Deconnection.php'>
    <li><button id=btndec type=submit name=sd class='btn btn-danger dropdown-toggle'>Se deconnecter </button></li>
    </form>
  </ul>
</div>
    ";

foreach ($resultats as $Reservation)
{
  echo"
  <form method=post action='Formulaire_Reserver.php'>
  <table class=table>
    <thead>
      <tr class=success>
        <th> Nom du restaurant : </th>
        <th> Nombre de table disponible : </th>
        <th> Telephone : </th>
        <th> Heure d'ouverture du restaurant : </th>
        <th> Heure de fermeture du restaurant : </th>
        <th> Nombre de personne : </th>
        <th> Réserver : </th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td> ".$Reservation['nomResto']." </td>
        <td> ".$Reservation['nbTables']." </td>
        <td> ".$Reservation['telResto']." </td>
        <td> ".$Reservation['heureOuv']." </td>
        <td>".$Reservation['heureFer']." </td>
        <td><input type=number name=nbpers placeholder='Nombre de personne' /></td>
        <td><input type=hidden name=idR value=". $Reservation['idResto'] ." /><input type=submit name=erg class='btn btn-success btn-sm btn-blockname' id=rbt value='Energistrer Reservation'></td>
      </tr>
    </tbody>
    </table>
    </form>";

}


 ?>
