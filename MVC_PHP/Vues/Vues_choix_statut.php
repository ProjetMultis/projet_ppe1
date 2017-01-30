<?php

//FORMULAIRE choix professionnel ou particulier
echo
"<div class=container>
	<div class=row>
		<form class=form-horizontal method=post action='Nouscontacter.php'>
<fieldset>

<legend>Précisez votre statut</legend> <!-- Form du formulaire -->
<h5>Ici vous pouvez écrire pour vous inscrire sur notre site :)</h5>

<select class=form-control onChange='location = this.options[this.selectedIndex].value;'>
<option value=''> Statut </option>
<option value='InscriptionParticulier.php'> Inscription Particulier </option>
<option value='InscriptionProfessionnel.php'> Inscription Professionnel </option>
</select>
</div>
</div>";

?>
