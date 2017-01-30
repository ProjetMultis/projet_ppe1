<?php
echo"
<fieldset>
 <legend style=text-align:center;> Places disponibles pour les restaurants </legend>
<fieldset>
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
</div>";
foreach($resultats as $lesResultats)
{
  echo "<div class='col-md-4'><div class='jumbotron' id=colorfondj>
  <h2 style='text-align: center;'><u>".$lesResultats['nomResto']."</u></h2>
  <p style='text-align: center;'> Nombre de tables restantes : ".$lesResultats['nbTables']."</p>
</div>
</div>";
}
 ?>
