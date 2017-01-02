<?php
include("MVC_PHP/Modele/Modele_special.php");

class affichageResto
{
  private $ModeleAffichage;
  public function __construct($serveur, $bdd, $user, $mdp)
  {
    $this ->ModeleAffichage = new Modele_special($serveur, $bdd, $user, $mdp);

  }
  public function AffichageRestaurant() //methode affichage de restaurant > 5 étoiles sur la page index
  {
    $this ->ModeleAffichage->renseigner("affichageunrestaurant");
      $resultats = $this ->ModeleAffichage -> selectAll();

    //Realiser les traitements sur les resultats avant affichage
    return $resultats;
  }

  public function Affichagetoutrestaurant() //methode affichage de tout les restaurants sur la page restaurant
  {
    $this->ModeleAffichage->renseigner("affichagerestaurant");
    $resultats = $this->ModeleAffichage-> selectAll();

    return $resultats;
  }

  public function Affichageunrestaurant($unRestaurant) // methode affichage d'un retaurant
  {
    $this->ModeleAffichage->renseigner("formatunrestaurant");
    $resultats = $this->ModeleAffichage-> unSeulResto($unRestaurant);


    return $resultats;
  }

  public function formualaireParticulier($champs, $where) //methode pour le formulaire particulier
  {
    $this->ModeleAffichage->renseigner("selectcontacteparticulier");
    $unResultat = $this->ModeleAffichage-> selectWhere($champs, $where);

    return $unResultat;
  }

  public function formualaireProfessionnel($champs, $where) //methode pour le formulaire professionnel
  {
    $this->ModeleAffichage->renseigner("selectcontacteprofessionnel");
    $unResultat = $this->ModeleAffichage-> selectWhere($champs, $where);


    return $unResultat;
  }

  public function insererBase($tab, $where)
  {
    return $this->ModeleAffichage-> insert($tab, $where);
  }

  public function affichageMenu($unMenu) //affichage du menu d'un restaurant
  {
    $this->ModeleAffichage-> renseigner("affichageMenu");
    $resultats = $this->ModeleAffichage->afficage_menu($unMenu);

    return $resultats;
  }


}
 ?>
