<!--FORMULAIRE choix professionnel ou particulier -->
<div class="container">
	<div class="row">
		<form class="form-horizontal" method="post" action="Nouscontacter.php">
<fieldset>

<legend>Une amélioration ? Un avis ?</legend> <!-- Form du formulaire -->
<h5>Ici vous pouvez écrire à nos chères administrateur :)</h5>

<select class="form-control" onChange="location = this.options[this.selectedIndex].value;">
<option value=""> Statut </option>
<option value="Particulier.php"> Particulier </option>
<option value="Professionnel.php"> Professionnel </option>
</select>
</div>
</div>
