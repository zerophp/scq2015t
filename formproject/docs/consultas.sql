
INSERT INTO gender (gender) values ("m");

SELECT * FROM gender;

UPDATE gender SET gender = 'h' WHERE idgender = 2;

DELETE FROM gender WHERE idgender = 3;

DELETE FROM gender WHERE idgender > 3;

INSERT INTO city SET city='Santiago de Compostela';

INSERT INTO transport SET transport='bicicleta';
INSERT INTO transport SET transport='moto';
INSERT INTO transport SET transport='coche';

SELECT * FROM transport;

INSERT user SET  iduser = 'iduservarcharmuy largo',
			     name = 'Agustin',
				 email = 'agustincl@gmail.com',
                 password = 'algo encriptado',
                 birthdate = '2001-01-01',
                 city_idcity = 1,
                 description = 'descripcion larga',
                 photo = 'image.png',
                 gender_idgender = 1;

explain SELECT name, transport, gender 
FROM user
JOIN user_has_transport ON 
user_has_transport.user_iduser = user.iduser
JOIN transport ON
transport.idtransport = user_has_transport.transport_idtransport
JOIN gender ON
gender.idgender = user.gender_idgender;


SELECT name, gender 
FROM user, gender
WHERE user.gender_idgender = gender.idgender;

SELECT name, city
FROM user
RIGHT JOIN city ON
idcity = city_idcity;

SELECT name, city
FROM city
LEFT JOIN user ON
idcity = city_idcity;


SELECT name, city
FROM city
INNER JOIN user ON
idcity = city_idcity
WHERE city like '%o';

explain SELECT name, city
FROM city
INNER JOIN user ON
idcity = city_idcity
WHERE city like '%o';


show status;
show variables;