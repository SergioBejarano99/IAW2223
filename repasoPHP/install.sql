    -- Eliminamos la Tabla "usurios" en el caso de que esta exista:
DROP TABLE IF EXISTS usuarios;

    -- Creamos tabla "usuarios":
CREATE TABLE usuarios (
    id INT(3) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25),
    nombre VARCHAR(50),
    apellidos VARCHAR(75),
    email VARCHAR(75),
    telefono VARCHAR(9),
    rol VARCHAR(25)
);

    -- Insertamos algunos Datos:
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, rol) VALUES (NULL, 'dtuohy', 'Barenski', 'Tuohy Lankham', 'mtuohy0@feedburner.com', '428761756', 'Supervisor');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, rol) VALUES (NULL, 'jcalabry', 'Veysey', 'Calabry Guys', 'hcalabry1@qq.com', '745526858', 'Architect');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, rol) VALUES (NULL, 'sguys', 'Brotherhood', 'Tuohy Guys', 'jguys2@imdb.com', '211686244', 'Surveyor');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, rol) VALUES (NULL, 'ewilne', 'Jeenes', 'Wilne Raselles', 'mwilne3@stumbleupon.com', '245969935', 'Electrician');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, rol) VALUES (NULL, 'ddethloff', 'Morena', 'Dethloff Klemz', 'wdethloff4@lulu.com', '724675510', 'Construction Foreman');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, rol) VALUES (NULL, 'gkirkby', 'Bryden', 'Kirkby Lankham', 'mkirkby5@ovh.net', '572942958', 'Project Manager');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, rol) VALUES (NULL, 'gmankor', 'Kesley', 'Raselles Mankor', 'vmankor6@aol.com', '743836867', 'Subcontractor');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, rol) VALUES (NULL, 'kraselles', 'Langdon', 'Raselles Calabry', 'vraselles7@nytimes.com', '445987259', 'Construction Worker');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, rol) VALUES (NULL, 'rklemz', 'Elias', 'Dethloff Klemz', 'bklemz8@liveinternet.ru', '403367342', 'Electrician');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, rol) VALUES (NULL, 'tlankham', 'Sillett', 'Lankham Mankor', 'dlankham9@nymag.com', '526306169', 'Construction Worker');





                    /* © Sergio Bejarano Arroyo */