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

create view affichageMenu as
  (
    select R.idResto, R.nomResto, R.imageResto, M.nomMenu, M.prixMenu, M.ingredientsMenu
    from restaurant R, effectuer E, menu M
    where R.idResto = E.idResto
    and E.idMenu = M.idMenu
  );

create view selectcontacteparticulier as
  (
    select Par.idClient, Par.nomClient, Par.emailClient, Par.numTelClient, Par.cp, Par.rue, Par.prenom, C.auteurCom, C.sujetCom, C.texteCom
    from Commentaires C, particulier Par

  );
create view selectcontacteprofessionnel as
  (
    select Pro.idClient, Pro.nomClient, Pro.emailClient, Pro.numTelClient, Pro.cp, Pro.rue, Pro.numSiret, Pro.nomContact, Pro.prenomContact, C.auteurCom, C.sujetCom, C.texteCom
    from Commentaires C, professionnel Pro
  );
