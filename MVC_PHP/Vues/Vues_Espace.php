<?php
echo "<fielset>
        <legend style=text-align:center;> Bonjour " . $_SESSION['user'] . "</legend>
      <fieldset>
      <form method=post action=Espace.php>
      <div class=col-md-12>
        <button class='btn btn-primary btn-lg btn-blockname' id=rs name=fr > Réserver votre restaurant </button>
        <button type=button class='btn btn-primary btn-lg btn-blockname' id=rs2 onClick=window.location.href='Disponibilite_place.php';> Voire place disponible des restaurants </button>
        <input type=submit class='btn btn-danger btn-sm btn-blockname' id=rs3 name=dec value='se deconnecter'/>
      </diV>
      </form>";


 ?>
