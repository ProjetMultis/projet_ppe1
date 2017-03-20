<?php
 //champ nom et prenom
echo"<fieldset>
      <legend style=text-align:center;> Formulaire pour les Particuliers </legend>
    </fieldset>
<div class= form-group>
  <form method=post action='InscriptionParticulier.php'>
  <div class=col-md-12>
    <div class='col-md-6'>
      <div class=form-group>
      <div class=input-group>
        <span class='input-group-addon' ><div class='glyphicon glyphicon-user'></div></span>
        <input name=nom placeholder=Nom class='form-control input-md' type=text />
      </div>
      </div>
    </div>
    <div class=col-md-6>
      <div class=form-group>
      <div class=input-group>
        <span class='input-group-addon' ><div class='glyphicon glyphicon-user'></div></span>
        <input name=prenom placeholder=Prenom class='form-control input-md' type=text>
      </div>
      </div>
    </div>
  </div><br /><br />".

//Adresse mail formulaire Nous Contacter et champ telephone
"
<div class=col-md-12>
  <div class=col-md-6>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-envelope'></div></span>
      <input name=mail placeholder=Email class='form-control input-md' type=text>
    </div>
    </div>
  </div>
  <div class=col-md-6>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-phone'></div></span>
      <input name=tel placeholder=Telephone class='form-control input-md' type=tel>
    </div>
    </div>
  </div>

</div>".

//champ adresse, rue et ville
"

<div class=col-md-12>
  <div class=col-md-6>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-home'></div></span>
      <input name=Rue placeholder=Rue class='form-control input-md' type='text'>
    </div>
    </div>
  </div>
  <div class=col-md-6>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-globe'></div></span>
      <input name=ville placeholder='Ville' class='form-control input-md' type=text>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-road'></div></span>
      <input name=code_postal placeholder='Code Postal' class='form-control input-md' type=text>
    </div>
    </div>
  </div>
</div>".

//Mot de passe et retaper votre mot de passe
"
<div class=col-md-12>
  <div class=col-md-6>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-lock'></div></span>
      <input name=mdp placeholder='Votre mot de passe' class='form-control input-md' type=password >
    </div>
    </div>
  </div>
  <div class=col-md-6>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-pencil'></div></span>
      <input name=rmdp placeholder='Retaper votre mot de passe' class='form-control input-md' type=password>
    </div>
    </div>
  </div>
</div>
".


//Button formulaire Nous Contacter
  "


  <label class='col-md-4 control-label' for=singlebutton></label>
    <button id=ins type=submit name=enrgp class='btn btn-primary' ><span class='glyphicon glyphicon-home' ></span> Inscription </button>



</form>
</div>";
?>
