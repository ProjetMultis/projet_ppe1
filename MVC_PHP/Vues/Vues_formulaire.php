<?php

//FORMULAIRE choix professionnel ou particulier
echo
"
<div class=container>
	<div class=row>

	<fieldset>

	<legend style='text-align: center;'>Une amélioration ? Un avis ?</legend> <!-- Form du formulaire -->
	<h5>Ici vous pouvez écrire à nos chères administrateur :)</h5>
	<div class='btn-group' id=chu>
	<button type='button' class='btn btn-danger'> Menu Compte </button>
	<button type='button' class='btn btn-danger dropdown-toggle' data-toggle='dropdown'>
		<span class='caret'></span>
		<span class='sr-only'>Toggle Dropdown</span>
	</button>
	<ul class=dropdown-menu role=menu>
		<li><a href=#>Connecté en tant que : <strong>" . $_SESSION['user'] . " </strong></li>
		<li class='divider'></li>
		<li><a href=Espace.php> Espace </a></li>
		<li><a href='Formulaire_Reserver.php'> Reserver </a></li>
		<li class='divider'></li>
		<form method=post action='Deconnection.php'>
		<li><button id=btndec type=submit name=sd class='btn btn-danger dropdown-toggle'>Se deconnecter </button></li>
		</form>
	</ul>
	</div>
		<form class=form-horizontal method=post action='Nouscontacter.php'>
<select class=form-control onChange='location = this.options[this.selectedIndex].value;'>
<option value=''> Statut </option>
<option value='Particulier.php'> Particulier </option>
<option value='Professionnel.php'> Professionnel </option>
</select>
</form>
</div>
</div>";

?>
