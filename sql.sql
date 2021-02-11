/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  roger
 * Created: 11 feb. 2021
 */

/*TABLE PROJECTS*/
CREATE TABLE projects(
    id          int(255) AUTO_INCREMENT PRIMARY KEY,
    Pname       varchar(255),
    description TEXT,
    image       varchar(255),
    url         varchar(255)
);


/*TABLE SKILLS*/
CREATE TABLE skills(
    id          int(20) AUTO_INCREMENT PRIMARY KEY,
    title       varchar(255),
    description TEXT
);


/*TABLE CONTACT*/
CREATE TABLE contacts(
    id          int(50) AUTO_INCREMENT PRIMARY KEY,
    username    varchar(255),
    url         varchar(255),
    image       varchar(255)
);

/*INSERT VALORES*/
UPDATE projects SET image="tiendaOnline.png", url="https://github.com/Roger-Rys/tienda_onli_php_poo_mvc" WHERE id=1;
INSERT INTO projects VALUES(null, "Tienda online","Uso de CSS, HTML, PHP(POO Y MVC) y SQL","tiendaOnline.png","https://github.com/Roger-Rys/tienda_onli_php_poo_mvc");
INSERT INTO projects VALUES(null, "Pagina con JS y jQuery","Uso de CSS, HTML, JS y libreria jQuery","js_jquery.png","https://github.com/Roger-Rys/proyecto_JS_jQuery");
INSERT INTO projects VALUES(null, "Rastreador de bicicleta con dispositivo","Uso de CSS, HTML, JS, PHP, JSON, Mapbox y SQL","rastreador.png","https://github.com/Roger-Rys/proA7");

INSERT INTO skills VALUES(null, "Lenguajes de Marcado","CSS Grid / Flex,HTML");
INSERT INTO skills VALUES(null, "Lenguajes de programacion","PHP, JavaScript, TypeScript, Python, C#");
INSERT INTO skills VALUES(null, "Base de datos","SQL / MySQL, Mongoos");
INSERT INTO skills VALUES(null, "Librerias","Bootstrap, jQuery");
INSERT INTO skills VALUES(null, "Framework","node JS, Express, Laravel, Angular");


UPDATE contacts SET url="https://www.linkedin.com/in/roger-rys/", image="linkedIn.png" WHERE id=1;
INSERT INTO contacts VALUES(null, "/roger-rys","https://www.linkedin.com/in/roger-rys/","linkedIn.png");
INSERT INTO contacts VALUES(null, "/Roger-Rys","https://github.com/Roger-Rys","github.png");
INSERT INTO contacts VALUES(null, "roger.reyesm97",null,"gmail.png");
INSERT INTO contacts VALUES(null, "/Roger_Ryes","https://twitter.com/Roger_Ryes","twitter.png");
