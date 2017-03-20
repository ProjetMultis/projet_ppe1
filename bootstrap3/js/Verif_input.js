function Verifier_formulaire(formulaire){
  if (formulaire.dr.value=="" && formulaire.nbpers.value=="")
  {
    alert ("Vous avez oublié de remplir la date et stipulé le nombre de personne");
  }
  else if (formulaire.dr.value=="")
  {
  	 alert ("Vous avez oublié de remplir la date");
  }
  else if(formulaire.nbpers.value=="")
  {
  	alert ("Vous avez oublié d'ecrire le nombre de personne");
  }
  else
  {
    alert ("Les champs obligatoires sont bien rempli, Envoie de la Réservation");
    formulaire.submit();
  }
}