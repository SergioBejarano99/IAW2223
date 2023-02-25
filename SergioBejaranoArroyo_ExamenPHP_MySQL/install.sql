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
    password VARCHAR(25),
    rol VARCHAR(25)
);

    -- Insertamos algunos Datos:
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, password, rol) VALUES (NULL, 'jcalabry', 'Veysey', 'Calabry Guys', 'hcalabry1@qq.com', '745526858',  'sefwserfas', 'Architect');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, password, rol) VALUES (NULL, 'sguys', 'Brotherhood', 'Tuohy Guys', 'jguys2@imdb.com', '211686244',  'aefefsfwe', 'Surveyor');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, password, rol) VALUES (NULL, 'ewilne', 'Jeenes', 'Wilne Raselles', 'mwilne3@stumbleupon.com', '245969935',  'wedsgdasf', 'Electrician');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, password, rol) VALUES (NULL, 'ddethloff', 'Morena', 'Dethloff Klemz', 'wdethloff4@lulu.com', '724675510',  'werpeirn', 'Construction Foreman');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, password, rol) VALUES (NULL, 'gkirkby', 'Bryden', 'Kirkby Lankham', 'mkirkby5@ovh.net', '572942958',  'werwfrgsdvr', 'Project Manager');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, password, rol) VALUES (NULL, 'gmankor', 'Kesley', 'Raselles Mankor', 'vmankor6@aol.com', '743836867',  'aerwefsafddf', 'Subcontractor');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, password, rol) VALUES (NULL, 'kraselles', 'Langdon', 'Raselles Calabry', 'vraselles7@nytimes.com', '445987259',  'werfwfwf', 'Construction Worker');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, password, rol) VALUES (NULL, 'rklemz', 'Elias', 'Dethloff Klemz', 'bklemz8@liveinternet.ru', '403367342',  'erpgpowepf', 'Electrician');
INSERT INTO usuarios (id, username, nombre, apellidos, email, telefono, password, rol) VALUES (NULL, 'tlankham', 'Sillett', 'Lankham Mankor', 'dlankham9@nymag.com', '526306169',  'pwepfnwpen', 'Construction Worker');





                    /* © Sergio Bejarano Arroyo */