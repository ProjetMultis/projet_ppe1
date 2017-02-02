<?php
echo "
      <fieldset>
        <legend style=text-align:center;> Connexion utilisateurs </legend>
      </fieldset>
      <form method=post action='Reservation.php' >
      <div class=col-md-12>
        <div class='col-md-6'>
          <div class=form-group>
          <div class=input-group>
            <span class='input-group-addon' ><div class='glyphicon glyphicon-user'></div></span>
            <input id=textinput name=email placeholder='Email Utilisateur' class='form-control input-md' type=email />
          </div>
          </div>
        </div>
        <div class=col-md-6>
          <div class=form-group>
          <div class=input-group>
            <span class='input-group-addon' ><div class='glyphicon glyphicon-lock'></div></span>
            <input type=password id=textinput name=mdp placeholder='Mot de passe' class='form-control input-md' type=password>
          </div>
          </div>
        </div>
      </div><br /><br />  "

      .

      "


      <label class='col-md-4 control-label' for=singlebutton></label>
        <button id=connex name=envoyer class='btn btn-primary'> Se Connecter </button><br />
        <a href='Choix_statut_inscription.php' id=connex2><em id='colorb'>Pas inscrit sur Restline?</em> Inscrivez vous </a>
      </form>";

 ?>
