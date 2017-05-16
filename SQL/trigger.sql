1)

---- insert par -----
drop trigger if exists Particulier;
Delimiter //
create trigger Particulier
before insert on Particulier
for each row
begin
  declare nbc, nbe int;
  select count(*) into nbc
  from client
  where idClient = new.idClient;

    if nbc = 0
      then
        insert into client values(new.idClient, new.nomClient, new.emailClient, new.numTelClient, new.cp, new.rue, new.ville, new.mdpClient);
    END if;
    select count(*) into nbe
    from Professionnel
    where idClient = new.idClient;

    if nbe > 0
      then
        SIGNAL SQLSTATE'45000'
        set message_text = 'il est Professionnel';
    END if;
    END //
    Delimiter ;

insert into particulier(idClient, nomClient, emailClient, numTelClient, cp, rue,ville, mdpClient, prenom)
  values(null, "bery", "titi@gmail.com", 0234567895, 92200, "20 avenue kerpse","paris", "moria", "bareau");

  ----- update par ------


  drop trigger if exists MjParticulier;
  Delimiter //
  create trigger MjParticulier
  after update on Particulier
  for each row
  begin
    declare nbc, nbe int;
    select count(*) into nbc
    from client
    where idClient = new.idClient;

      if nbc = 0
        then
          insert into client values(new.idClient, new.nomClient, new.emailClient, new.numTelClient, new.cp, new.rue, new.ville, new.mdpClient);
      END if;
      select count(*) into nbe
      from Professionnel
      where idClient = new.idClient;

      if nbe > 0
        then
          SIGNAL SQLSTATE'45000'
          set message_text = 'il est particulier';
      END if;
      END //
      Delimiter ;


--- insert Professionnel -----

  drop trigger if exists Professionnel;
  Delimiter //
  create trigger Professionnel
  before insert on Professionnel
  for each row
  begin
    declare nbc, nbe int;
    select count(*) into nbc
    from client
    where idClient = new.idClient;

      if nbc = 0
        then
          insert into client values(new.idClient, new.nomClient, new.emailClient, new.numTelClient, new.cp, new.rue, new.ville, new.mdpClient);
      END if;
      select count(*) into nbe
      from Particulier
      where idClient = new.idClient;

      if nbe > 0
        then
          SIGNAL SQLSTATE'45000'
          set message_text = 'il est particulier';
      END if;
      END //
      Delimiter ;

      insert into Professionnel values(NULL,'juppe', 'joris@gmail.com', 0678953212, 78180, '30 rue des blaireaux','Paris', 'Feride', '123467Ae',   'jupperez', 'joris');

---- update pro----

drop trigger if exists MjProfessionnel;
Delimiter //
create trigger MjProfessionnel
after update on Professionnel
for each row
begin
  declare nbc, nbe int;
  select count(*) into nbc
  from client
  where idClient = new.idClient;

    if nbc = 0
      then
        insert into client values(new.idClient, new.nomClient, new.emailClient, new.numTelClient, new.cp, new.rue, new.ville, new.mdpClient);
    END if;
    select count(*) into nbe
    from Particulier
    where idClient = new.idClient;

    if nbe > 0
      then
        SIGNAL SQLSTATE'45000'
        set message_text = 'il est particulier';
    END if;
    END //
    Delimiter ;


2) trigger Ajoutcommentaires pour table commentaire

drop trigger if exists Ajoutcommentaires;
Delimiter //
create trigger Ajoutcommentaires
before insert on Commentaires
for each row
begin
  if(new.idClient IS null)
    then
      update client set idClient = (select MAX(idClient)+1 from commentaires where idCom = new.idCom);
      insert into commentaires set idClient = new.idClient;

  END if;
  END //
  Delimiter ;

  insert into commentaires(auteurCom, sujetCom, texteCom) values("Admin", "test 4", "test admin 4");

    3) trigger Ajoutidclient pour table userclient

    drop trigger if exists Ajoutidclient;
    Delimiter //
    create trigger Ajoutidclient
    before insert on userclient
    for each row
    begin
      if(new.idClient IS null)
        then
          set new.idClient = (select MAX(idClient)+1 from userclient);

      END if;
      END //
      Delimiter ;

     insert into userclient(user, mdpClient) values("vincent", "QAZER/");

   4) mise à jour place dispo

   drop trigger if exists enleverPlace;
   Delimiter //
   create trigger enleverPlace
   After insert on reservation
   for each row
   begin
    declare EP int;
    select count(*) into EP
    from restaurant rest, reservation reserv
    where rest.idResto = reserv.idResto;

    if(Ep > 0)
      then
        update restaurant
        set nbTables = nbTables - 1
        where idResto = new.idResto;
   END if;
   END //
   Delimiter ;
