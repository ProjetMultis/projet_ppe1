<?php
 //champ nom et siret
echo"<fieldset>
      <legend style=text-align:center;> Formulaire pour les Professionnels </legend>
    </fieldset>
<div class= form-group>
  <form method=post action='Professionnel.php' >
  <div class=col-md-12>
    <div class='col-md-6'>
      <div class=form-group>
      <div class=input-group>
        <span class='input-group-addon' ><div class='glyphicon glyphicon-user'></div></span>
        <input id=textinput name=nom placeholder=Nom class='form-control input-md' type=text />
      </div>
      </div>
    </div>
    <div class=col-md-6>
      <div class=form-group>
      <div class=input-group>
        <span class='input-group-addon' ><div class='glyphicon glyphicon-list-alt'></div></span>
        <input id=textinput name='ns' placeholder='Numero Siret' class='form-control input-md' type=text>
      </div>
      </div>
    </div>
  </div><br /><br />".

//Nom contact et prenom contact
  "
  <div class=col-md-12>
    <div class=col-md-6>
      <div class=form-group>
      <div class=input-group>
        <span class='input-group-addon' ><div class='glyphicon glyphicon-send'></div></span>
        <input id=textinput name=nc placeholder='Nom du Contact' class='form-control input-md' type=text>
      </div>
      </div>
    </div>
    <div class=col-md-6>
      <div class=form-group>
      <div class=input-group>
        <span class='input-group-addon' ><div class='glyphicon glyphicon-folder-open'></div></span>
        <input id=textinput name=pc placeholder='Prenom du Contact' class='form-control input-md' type=text>
      </div>
      </div>
    </div>

  </div>".

//Adresse mail formulaire Nous Contacter et champ telephone
"
<div class=col-md-12>
  <div class=col-md-6>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-envelope'></div></span>
      <input id=textinput name=mail placeholder=email class='form-control input-md' type=email>
    </div>
    </div>
  </div>
  <div class=col-md-6>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-phone'></div></span>
      <input id=textinput name=tel placeholder=Telephone class='form-control input-md' type=tel>
    </div>
    </div>
  </div>

</div>".

//champ adresse et rue
"

<div class=col-md-12>
  <div class=col-md-6>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-home'></div></span>
      <input id=textinput name=Rue placeholder=Rue class='form-control input-md' type='text'>
    </div>
    </div>
  </div>
  <div class=col-md-6>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-globe'></div></span>
      <input name=ville placeholder='Ville' class='form-control input-md' type=text>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-road'></div></span>
      <input id=textinput name=code_postal placeholder='Code Postal' class='form-control input-md' type=text>
    </div>
    </div>
  </div>
</div>".

//Sujet et message
"
  <div class=col-md-12>
    <div class=form-group>
    <div class=input-group>
      <span class='input-group-addon' ><div class='glyphicon glyphicon-comment'></div></span>
      <input id=textinput name=sujet placeholder=Sujet class='form-control input-md' type=text style=text-align:center;>
    </div>
    </div>
  </div>


  <div class=col-md-12>
    <div class=form-group>
    <div class=input-group>
      <textarea class=form-control placeholder='Votre Message' id=textarea name=message cols=200></textarea>
    </div>
    </div>
  </div>
".


//Button formulaire Nous Contacter
  "


  <label class='col-md-4 control-label' for=singlebutton></label>
    <button id=btnfpro name=envoyer class='btn btn-primary'> Envoyer Message </button>



</form>
</div>";
?>
