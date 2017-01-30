<?php
include("MVC_PHP/Controleur/Controleur_site.php");
$Controleur = new affichageResto("localhost", "restline", "root", "");

if(isset($_POST['sd']))
{
  $Controleur-> deconnection();

  header('location:Reservation.php');
}
 ?>
