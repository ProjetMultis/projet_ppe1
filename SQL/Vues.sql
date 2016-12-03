create view affichagerestaurant as(
    select R.idResto, R.nomResto, V.nomVille, Re.nomRegion, TR.libelle, R.imageResto
    from ville V, region RE, typeresto TR, restaurant R
    where TR.idTypeResto = R.idTypeResto
    and R.cpVille = V.cpVille
    and V.idRegion = Re.idRegion
    order by R.nomResto
  );

  create view affichageunrestaurant as(
      select R.nomResto, V.nomVille, Re.nomRegion, TR.libelle, R.imageResto
      from ville V, region Re, typeresto TR, restaurant R
      where TR.idTypeResto = R.idTypeResto
      and R.cpVille = V.cpVille
      and V.idRegion = Re.idRegion
      and TR.nbEtoiles = 5
      order by R.nomResto
    );

    create view formatunrestaurant as(
        select R.idResto, R.nomResto, R.nbTables, R.nbCouverts, R.telResto, R.heureOuv, R.heureFer, R.ferExceptionnelle, R.imageResto, TR.libelle, TR.catPrix
        from typeresto TR, restaurant R
        where TR.idTypeResto = R.idTypeResto
    );
