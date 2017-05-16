insert into ville values
		('75001', 'Paris', 1),
		('93200', 'Saint-Denis', 2),
		('45530', 'Vitry au Loges', 3),
		('94400', 'Vitry-sur-', 4),
		('92600', 'Asnieres-sur-Seine', 5),
		('92100', 'Boulogne-Billancourt', 6),
		('92200', 'Neuilly-sur-Seine', 7),
		('13001', 'Marseille', 8),
		('29200', 'Brest', 9),
		('66100', 'Perpignan', 10),
		('59000', 'Lille', 11),
		('67000', 'Strasbourg', 12),
		('69001', 'Lyon', 13),
		('33000', 'Bordeaux', 14),
		('63000', 'Clermont-Ferrand', 15),
		('14000', 'Caen', 16),
		('21000', 'Dijon', 17),
		('95330', 'Domont', 18),
		('91000', 'Evry', 19),
		('74400', 'Chamonix Mont Blanc', 20);

insert into typeresto values
		(null, 'italien', 'Moyenne gammes', 3),
		(null, 'Francais', 'Haute gammes', 5),
		(null, 'Espagnole', 'Bas de gammes', 2),
		(null, 'Allemand', 'Moyenne gammes', 1);
	
insert into Menu values
		(null, 'Poulet de Bresse aux gousses d ail et foie gras', 120, 'Poulet ail foie gras sauce magique'),
		(null, 'langoustines soufflées chez Le Duc', 60, 'Langoustines, sauce pimenté'),
		(null, 'Foie de veau de Corrèze cuit épais', 40, 'Foie de veau, sauce citron'),
		(null, 'Soufflé au chocolat', 8, 'Chocolat'),
		(null, 'Tarte aux fraises', 19, 'Fraise, pâtes'),
		(null, 'Clafoutis aux fruits de saison', 13, 'Clafoutis, orange, fraises, framboises'),
		(null, 'Tarte tatin', 13, 'Crème fraiche, tarte tatin'),
		(null, 'Paris-Brest', 9, 'Crème, lait'),
		(null, 'Jambon blanc, truffe, spaghetti au parmesan', 89, 'Jambon de paris, truffe, spaghetti, pâtes, parmesan');

insert into TypePaiement values
		(null, 'carte bleu'),
		(null, 'espece'),
		(null, 'cheque');

insert into Commentaires values
		(null, 'admin', 'Premiers commentaires', 'Ceci est le premiers commentaires de l’administrateurs', 1);

insert into client values
	(null, 'feride', 'feride@hotmail.fr', '30 rue des cerisier', '0130254678');

insert into reservation values
	(null, '2016-11-17', '9:00:00', '2', 1, 1);

insert into periode values
	(null, '2016-11-17', '2016-12-17');

insert into professionnel values
	('732 829 320 00074', 'rudy', 'mouloud', 'feride', 'feride@hotmail.fr', '30 rue des cerisier', '0130254678', 1);

insert into particulier values
	('mery', 'feride', 'feride@hotmail.fr', '30 rue des cerisier', '0130254678', 1);

insert into region values
	(null, 'Ile de France'),
	(null, 'PACA'),
	(null, 'Bretagne'),
	(null, 'Normandie'),
	(null, 'Hauts-de-France'),
	(null, 'Occitanie'),
	(null, 'Nouvelle-Aquitaine'),
	(null, 'Grand-Est'),
	(null, 'Pays de la Loire'),
	(null, 'Centre-Val de Loire'),
	(null, 'Bourgogne-Franche-Comté'),
	(null, 'Auvergne-Rhône-Alpes'),
	(null, 'Corse');