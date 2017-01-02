<?php
 //champ nom et prenom
echo"<div class= form-group>
  <form method=post action= >
  <div class=col-md-12>
    <div class=col-md-6>
    <p>
      <label class='col-md-4 control-label' for=textinput> Nom </label>
      <input id=textinput name=nom class='form-control input-md' required= type=text />

    </div>
    <div class=col-md-6>
      <label class='col-md-4 control-label' for=textinput> Prenom </label>
      <input id=textinput name=prenom class='form-control input-md' required= type=text>
    </p>
    </div>


    </div><br /><br />".

//Adresse mail formulaire Nous Contacter et champ telephone
"
<div class=col-md-12>
  <div class=col-md-6>
  <p>
    <label class='col-md-4 control-label' for=textinput> Votre adresse mail </label>
    <input id=textinput name=mail class='form-control input-md' type=email>
  </div>
  <div class=col-md-6>
    <label class='col-md-4 control-label' for=textinput> Téléphone </label>
    <input id=textinput name=telephone class='form-control input-md' type=tel>
  </p>
  </div>
</div>".

//champ adresse et rue
"

<div class=col-md-12>
  <div class=col-md-6>
  <p>
    <label class='col-md-4 control-label' for=textinput> adresse </label>
    <input id=textinput name=adresse class='form-control input-md' type='text'>
  </div>
  <div class=col-md-6>
    <label class='col-md-4 control-label' for=textinput> Rue </label>
    <input id=textinput name=Rue class='form-control input-md' type=text>
  </p>
  </div>
</div>".

//Sujet et message
"
<p>
  <div class=col-md-12>
    <label class='col-md-4 control-label' for=textinput> Sujet </label>
    <input id=textinput name=sujet class='form-control input-md' type=text>
  </div>
</p>
<p>
  <div class=col-md-12>
    <label class='col-md-4 control-label' for=textinput> Message </label>
    <textarea class=form-control id=textarea name=message></textarea>
  </div>
</p>".


//Button formulaire Nous Contacter
  "


  <label class='col-md-4 control-label' for=singlebutton></label>
    <button id=singlebutton name=envoyer class='btn btn-primary'> Envoyer </button>



</form>
</div>";
?>
