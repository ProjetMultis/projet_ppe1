<?php
 //champ nom et prenom
echo"<fieldset>
      <legend style=text-align:center;> Une question ? </legend>
    </fieldset>

<div class='btn-group' id=chu>
  <button type='button' class='btn btn-danger'> Menu Compte </button>
  <button type='button' class='btn btn-danger dropdown-toggle' data-toggle='dropdown'>
    <span class='caret'></span>
    <span class='sr-only'>Toggle Dropdown</span>
  </button>
  <ul class=dropdown-menu role=menu>
    <li><a href=# >Connecté en tant que : <strong>" . $_SESSION['user'] . " </strong></li>
    <li class='divider'></li>
    <li><a href=Espace.php> Espace </a></li>
    <li><a href='Formulaire_Reserver.php'> Reserver </a></li>
    <li><a href='Disponibilite_place.php'> Places Disponibles </a></li>
    <li class='divider'></li>
    <form method=post action='Deconnection.php'>
    <li><button id=btndec type=submit name=sd class='btn btn-danger dropdown-toggle'>Se deconnecter </button></li>
    </form>
  </ul>
</div>
".
//Sujet et message
"
<div class= form-group>
  <form method=post action='Nouscontacter.php' >
  <div class='col-md-10 col-xs-10'>
    <div class=form-group>
    <div class=input-group style='margin-left: 15%;'>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-comment'></div></span>
      <input id=textinput name=sujet placeholder=Sujet class='form-control input-md' type=text style=text-align:center;>
    </div>
    </div>

    <div class=form-group style='margin-left: 15%;'>
    <div class=input-group>
      <textarea class=form-control placeholder='Votre Message' id=textarea name=message cols=200></textarea>
    </div>
    </div>
  </div>

".


//Button formulaire Nous Contacter
  "


  <label class='col-md-4 col-xs-4 control-label' for=singlebutton></label>
    <button id=btnfpar name=envoyer class='btn btn-primary'><span class='glyphicon glyphicon-envelope'></span> Envoyer Message </button>



</form>
</div>";
?>
