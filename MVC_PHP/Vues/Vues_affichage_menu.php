
<?php
    //Titre menu + slider
    echo"<div class= panel-group>
          <div class= 'panel panel-danger'>
            <div class=panel-heading><h2 style='text-align: center;'>".$resultats['nomMenu']."</h2></div>
          </div>
        </div>

        <div class=col-sm-12 col-md-12 col-lg-12 col-xs-12>
          <div class='row marge-bas'>
            <div class=col-lg-12 col-xs-12 col-md-12 col-sm-12>
              <div class=bs-example>
                <div id=myCarousel class='carousel slide' data-ride=carousel data-interval=5000>
                <!-- Indicateur -->
                  <ol class=carousel-indicators>
                      <li class=slide_1 active></li>
                      <li class=slide_2></li>
                      <li class=slide_3></li>
                  </ol>
                  <div class=carousel-inner>
                      <div class='active item'>
                          <img src=image/nourriture1.png alt=>
                          <div class=carousel-caption>
                              <h3></h3>
                          </div>
                      </div>
                      <div class=item>
                          <img src=image/nourriture2.png alt=>
                          <div class=carousel-caption>
                              <h3></h3>
                          </div>
                      </div>
                      <div class=item>
                          <img src=image/nourriture3.png alt=>
                          <div class=carousel-caption>
                              <h3></h3>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- Controle pour ce diriger sur le slider -->
                          <a class='carousel-control left'>
                              <span class='glyphicon glyphicon-chevron-left'></span>
                          </a>
                          <a class='carousel-control right'>
                              <span class='glyphicon glyphicon-chevron-right'></span>
                          </a>
            </div>
          </div>
        </div>";

//tableaux Menu
  echo "
  <table class='table table-bordered table-striped'>
    <thead>
      <tr class=success>
        <th> Ingredients du Menu (composition)</th>
        <th> Prix en € </th>
      </tr>
    </thead>
    <tbody>
      <tr class=info>
        <td>" .$resultats['ingredientsMenu']. "</td>
        <td>" .$resultats['prixMenu']. "</td>
      </tr>
    </tbody>
  </table>
</div>";
?>
