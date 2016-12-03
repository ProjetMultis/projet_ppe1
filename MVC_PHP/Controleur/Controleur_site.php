<?php
include("MVC_PHP/Modele/Modele_special.php");

class affichageResto
{
  private $ModeleAffichage;
  public function __construct($serveur, $bdd, $user, $mdp)
  {
    $this ->ModeleAffichage = new Modele_special($serveur, $bdd, $user, $mdp);

  }
  public function AffichageRestaurant()
  {
    $this ->ModeleAffichage->renseigner("affichageunrestaurant");
    $resultats = $this ->ModeleAffichage -> selectAll();

    //Realiser les traitements sur les resultats avant affichage
    return $resultats;
  }

  public function Affichagetoutrestaurant()
  {
    $this->ModeleAffichage->renseigner("affichagerestaurant");
    $resultats = $this->ModeleAffichage-> selectAll();

    return $resultats;
  }

  public function Affichageunrestaurant($unRestaurant)
  {
    $this->ModeleAffichage->renseigner("formatunrestaurant");
    $resultats = $this->ModeleAffichage-> unSeulResto($unRestaurant);


    return $resultats;
  }
}
 ?>
