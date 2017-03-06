----------Reservation------------

select distinct Rest.nomResto, Rest.nbTables, Rest.nbCouverts, Rest.telResto, Rest.heureOuv, Rest.heureFer, r.nbPersonnes
from restaurant Rest left join reservation r on r.idResto = Rest.idResto
left join client c on c.idClient = r.idClient;


select Rest.nomResto, Rest.nbTables, Rest.nbCouverts, Rest.telResto, Rest.heureOuv, Rest.heureFer, r.nbPersonnes
from restaurant Rest inner join reservation r on r.idResto = Rest.idResto
inner join client c on c.idClient = r.idClient;

----------- table Client, particulier, pro------------
CREATE TABLE `professionnel` (
  `idClient` int(10) NOT NULL auto_increment,
  `nomClient` varchar(30) DEFAULT NULL,
  `emailClient` varchar(40) DEFAULT NULL,
  `numTelClient` int(10) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `rue` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `mdpClient` varchar(50) DEFAULT NULL,
  `numSiret` varchar(35) DEFAULT NULL,
  `nomContact` varchar(20) DEFAULT NULL,
  `prenomContact` varchar(20) DEFAULT NULL,
  primary key(idClient)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `particulier` (
  `idClient` int(10) NOT NULL auto_increment,
  `nomClient` varchar(30) DEFAULT NULL,
  `emailClient` varchar(40) DEFAULT NULL,
  `numTelClient` int(10) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `rue` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `mdpClient` varchar(50) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  primary key(idClient)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `client` (
  `idClient` int(10) NOT NULL auto_increment,
  `nomClient` varchar(30) DEFAULT NULL,
  `emailClient` varchar(40) DEFAULT NULL,
  `numTelClient` int(10) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `rue` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `mdpClient` varchar(50) DEFAULT NULL,
  primary key(idClient)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


------------trigger heritage---------

-----par-----
drop trigger if exists Particulier;
Delimiter //
create trigger Particulier
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

---- pro------
    drop trigger if exists Professionnel;
    Delimiter //
    create trigger Professionnel
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
            set message_text = 'il est profesionnel';
        END if;
        END //
        Delimiter ;

  ----- table reservation ------
  CREATE TABLE `reservation` (

    `idReservation` int(10) NOT NULL auto_increment,
    `date_heure_Reservation` datetime DEFAULT NULL,
    `nbPersonnes` int(5) DEFAULT NULL,
    `statut` varchar(50) DEFAULT NULL,
    `idResto` int(10) NOT NULL,
    `idClient` int(10) NOT NULL,
    primary key(idReservation),
    foreign key (idResto) references restaurant(idResto),
    foreign key (idClient) references client(idClient)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;


  -------  trigger table reservation -------

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
