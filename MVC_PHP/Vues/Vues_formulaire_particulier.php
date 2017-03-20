<?php
 //champ nom et prenom
echo"<fieldset>
      <legend style=text-align:center;> Formulaire pour les Particuliers </legend>
    </fieldset>

  ".

//Sujet et message
"
<div class= form-group>
  <form method=post action='Particulier.php' >
  <div class=col-md-10>
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


  <label class='col-md-4 control-label' for=singlebutton></label>
    <button id=btnfpar name=envoyer class='btn btn-primary'><span class='glyphicon glyphicon-envelope'></span> Envoyer Message </button>



</form>
</div>";
?>
