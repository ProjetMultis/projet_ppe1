1)
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
        insert into client values(new.idClient, new.nomClient, new.emailClient, new.adresseClient, new.numTelClient);
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

insert into Particulier values(3, 'titi', 'toto', 'toto@gmail.com', '5 rue victor hugo', 0647895612);

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
          insert into client values(new.idClient, new.nomClient, new.emailClient, new.adresseClient, new.numTelClient);
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

      insert into Professionnel values(3, 'juppe', 'joris', 'Feride', 'joris@gmail.com', '5 rue de la pegre', 0678953212, 3);
