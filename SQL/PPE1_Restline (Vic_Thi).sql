Drop database Restline;
Create database Restline;
Use Restline;

Create table Restaurant
(idResto int(10) not null AUTO_INCREMENT,
nomResto varchar(30),
nbTables int(5),
nbCouverts int(5),
telResto varchar(10),
heureOuv time,
heureFer time,
ferExceptionnelle varchar(100),
imageResto varchar(30),
Primary Key(idResto),
idTypeResto int(20) not null,
cpVille int(5) not null,
Foreign Key(idTypeResto) References TypeResto(idTypeResto),
Foreign Key(cpVille) References Ville(cpVille));

Create table TypePaiement
(idPaiement int(10) not null AUTO_INCREMENT,
libellePaiement int(100),
Primary Key(idPaiement));

Create table Reservation
(idReservation int(10) not null AUTO_INCREMENT,
dateReservation date,
heureReservation time,
nbPersonnes int(5),
Primary Key (idReservation),
idResto int(10) not null,
idClient int(10) not null,
Foreign Key(idResto) References Restaurant(idResto),
Foreign Key(idClient) References Client(idClient));

Create table Menu
(idMenu int(10) not null AUTO_INCREMENT,
nomMenu char(30),
prixMenu decimal(10,2),
ingredientsMenu varchar(400),
Primary Key(idMenu));

Create table Periode
(numSemaine int(2) not null,
dateDebut date,
dateFin date,
Primary Key(numSemaine));

Create table Client
(idClient int(10) not null AUTO_INCREMENT,
nomClient varchar(30),
emailClient varchar(40),
adresseClient varchar(100),
numTelClient varchar(10),
Primary Key(idClient));

Create table Commentaires
(idCom int(10) not null AUTO_INCREMENT,
auteurCom varchar(50),
sujetCom varchar(50),
texteCom varchar(50),
Primary Key(idCom),
idClient int(10) not null,
Foreign Key(idClient) References Client(idClient));

Create table Professionnel
(numSiret varchar(15),
nomContact varchar(20),
prenomContact varchar(20),
nomClient varchar(30),
emailClient varchar(40),
adresseClient varchar(100),
numTelClient varchar(10),
idClient int(10) not null,
Primary Key(idClient));

Create table Particulier
(prenom varchar(30),
nomClient varchar(30),
emailClient varchar(40),
adresseClient varchar(100),
numTelClient varchar(10),
idClient int(10) not null,
Primary Key(idClient));

Create table TypeResto
(idTypeResto int(20) not null AUTO_INCREMENT,
libelle varchar(50),
catPrix varchar(30),
nbEtoiles int(2),
Primary Key(idTypeResto));

Create table Ville
(cpVille int(5) not null AUTO_INCREMENT,
nomVille varchar(50),
Primary Key(cpVille),
idRegion int(10) not null,
Foreign Key(idRegion) References Region(idRegion));

Create table Region
(idRegion int(10) not null AUTO_INCREMENT,
nomRegion varchar(50),
Primary key(idRegion));


Create table Effectuer
(idResto int(10) not null,
idMenu int(10) not null,
Primary Key(idResto, idMenu));

Create table Accepter
(idPaiement int(10) not null,
idResto int(10) not null,
Primary Key(idPaiement, idResto));

Create table Correspondre
(idMenu int(10) not null,
idReservation int(10) not null,
numSemaine int(2) not null,
pourcentage decimal(5,2),
Primary Key(idMenu, idReservation, numSemaine));
