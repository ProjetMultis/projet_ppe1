<?php
  include('Modele_site.php');

  class Modele_special extends Modele
  {

    public function __construct($serveur, $bdd, $user, $mdp)
    {
      parent::__construct($serveur, $bdd, $user, $mdp);
    }

    public function unSeulResto($unRestaurant)
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
  }

 ?>
