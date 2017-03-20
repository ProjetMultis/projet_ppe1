<?php
include("MVC_PHP/Modele/Modele_special.php");

class affichageResto
{
  private $ModeleAffichage;
  public function __construct($serveur, $bdd, $user, $mdp)
  {
    $this ->ModeleAffichage = new Modele_special($serveur, $bdd, $user, $mdp);

  }

  //--------- Affichage données ----------

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


  public function affichageMenu($unMenu) //affichage du menu d'un restaurant
  {
    $this->ModeleAffichage-> renseigner("affichageMenu");
    $resultats = $this->ModeleAffichage->afficage_menu($unMenu);

    return $resultats;
  }

  public function affichageReservation() //affichage tableau reservation
  {
    $this->ModeleAffichage-> renseigner("restaurant");

    $resultats = $this->ModeleAffichage-> selectAll();

    return $resultats;
  }

  public function selectionRestaurant($champs, $where)
  {
    $this->ModeleAffichage-> renseigner("restaurant");
    $resultats = $this->ModeleAffichage-> selectWhere($champs, $where);

    return $resultats;
  }

  public function AffichageRestaurantPlace() //méthode pour afficher les tables disponibles dans les restaurants
  {
    $this->ModeleAffichage-> renseigner("restaurant");
    $resultats = $this->ModeleAffichage-> selectAll();

    return $resultats;
  }

  public function AffichageMaReservation($champs, $where) //methode pour afficher plusieurs resultats avec le where
  {
    $this->ModeleAffichage-> renseigner("reservation");
    $unResultat = $this->ModeleAffichage-> selectWheretoutRes($champs, $where);

    return $unResultat;
  }

  //------ Connexion utilisateur, deco etc ---------

  public function Connexion_client($champs, $where) //methode pour se connecter à l'espace membre
  {
    $this->ModeleAffichage-> renseigner("client");
    $resultats = $this->ModeleAffichage-> selectWhere($champs, $where);

    return $resultats;
  }

  public function deconnection() //methode pour se deconnecter de l'espace membre
  {
    $sedeconnecter = $this->ModeleAffichage-> seDeconnecter();

    return $sedeconnecter;
  }

  public function idRestaurant() //pour assurer l'insertion du dernier id enregistrer
  {
    $Did = $this->ModeleAffichage->  DerniereId();

    return $Did;
  }

  public function miseajourid($table, $where)
  {
    $this->ModeleAffichage-> renseigner("client");

    return $this->ModeleAffichage-> update($table, $where);
  }

  public function DateHeureReservation() //Controle pour obtenir date et heure d'aujourd'hui
  {
    $dateheure = $this->ModeleAffichage-> obtenirDateHeure();
    return $dateheure;
  }

  public function retourneColonne($ligne)
  {
    $colonne = $this->ModeleAffichage-> ligneColonne($ligne);
    return $colonne;
  }
  public function retournerdateFrRes($maDate) //controler l'affichage de la date fr pour les reservations
  {
    $fr = $this->ModeleAffichage-> dateFR($maDate);
    return $fr;
  }
  public function mettreAccentSatut($valeur) //controle pour afficher mot avec accent en UTF8 pour les réservations
  {
    $accent = $this->ModeleAffichage-> encoderUTF($valeur);
    return $accent;
  }
  public function retournerdateEn($maDate)
  {
    $En = $this->ModeleAffichage-> dateEn($maDate);
    return $En;
  }

//------ Insertion Base ------

  public function insererParticulier($tab) //inserer table particulier
  {
    $this->ModeleAffichage->renseigner("particulier");

    return $this->ModeleAffichage-> insert($tab);


  }

  public function insererProfessionnel($tab) //insérer table professionnel
  {
    $this->ModeleAffichage->renseigner("professionnel");

    return $this->ModeleAffichage-> insert($tab);
  }

  public function insererMessage($tab2) //inserer table commentaire
  {
      $this->ModeleAffichage->renseigner("commentaires");

      return $this->ModeleAffichage-> insert($tab2);

  }


  public function insertionReservation($tab) //insertion formulaire reservation
  {
    $this->ModeleAffichage-> renseigner("reservation");

    return $this->ModeleAffichage-> insert($tab);
  }



}
 ?>
