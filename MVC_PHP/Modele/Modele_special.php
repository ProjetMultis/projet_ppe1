<?php
  include('Modele_site.php');

  class Modele_special extends Modele
  {

    public function __construct($serveur, $bdd, $user, $mdp)
    {
      parent::__construct($serveur, $bdd, $user, $mdp);
    }

    public function unSeulResto($unRestaurant) //méthode pour afficher un seul restaurant
    {
      $requete = "select idResto, nomResto, nbTables, nbCouverts, telResto, heureOuv, heureFer, imageResto, libelle, catPrix
                  from formatunrestaurant
                  where idResto = :idResto";

      $donnees = array(":idResto" => $unRestaurant);
      $selectionne = $this->pdo->prepare($requete);
      $selectionne -> execute($donnees);
      $resultats = $selectionne-> fetchAll();

      return $resultats;
    }
    public function afficage_menu($unMenu) //methode pour afficher le menu
    {
      $requete = "select idResto, nomMenu, imageResto, nomMenu, prixMenu, ingredientsMenu
                  from affichagemenu
                  where idResto = :idResto";

      $donnees = array(":idResto" => $unMenu);
      $selectionne = $this->pdo->prepare($requete);
      $selectionne -> execute($donnees);
      $resultats = $selectionne-> fetch();


      return $resultats;
    }
  }

 ?>
