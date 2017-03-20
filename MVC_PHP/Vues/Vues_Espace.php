<?php
echo "<fielset>
        <legend style=text-align:center;> Bonjour " . $_SESSION['user'] . "</legend>
      <fieldset>
      <form method=post action=Espace.php>
      <div class=col-md-12>
        <button class='btn btn-primary btn-lg btn-blockname' id=rs4 name=mr> Mes Reservations </button>
        <button class='btn btn-primary btn-lg btn-blockname' id=rs name=fr > Réserver votre restaurant </button>
        <button class='btn btn-primary btn-lg btn-blockname' id=rs2 name=vpr> Voire place disponible des restaurants </button>
        <input type=submit class='btn btn-danger btn-sm btn-blockname' id=rs3 name=dec value='se deconnecter'/>
      </diV>
      </form>";


 ?>
