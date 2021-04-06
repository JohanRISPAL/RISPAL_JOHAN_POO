CREATE DATABASE IF NOT EXISTS examPhP;
USE examPhP;

CREATE TABLE Users(
    id int(11) NOT NULL AUTO_INCREMENT,
    login varchar(64),
    password varchar(64),
    PRIMARY KEY (id)
) DEFAULT CHARSET=utf8;

CREATE TABLE Team(
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(64),
    victory int(2),
    draw int(2),
    defeat int(2),
    goal int(3),
    conceded int(3),
    logo varchar(255),
    PRIMARY KEY (id)
) DEFAULT CHARSET=utf8;

INSERT INTO Users (login, password)
VALUES ("admin", "admin");

INSERT INTO Team(name, victory, draw, defeat, goal, conceded, logo)
VALUES ("Lille", 19, 9, 3, 51, 19, 'lille.png'),
("Paris", 20, 3, 8, 67, 22, 'paris.png'),
("Monaco", 19, 5, 7, 64, 38, 'monaco.png'),
("Lyon", 17, 10, 4, 60, 31, 'lyon.png'),
("Lens", 13, 10, 8, 47, 43, 'lens.png'),
("Marseille", 13, 9, 9, 40, 36, 'marseille.png'),
("Rennes", 12, 9, 10, 39, 35, 'rennes.png'),
("Montpellier", 12, 9, 49, 51, 50, 'montpellier.png'),
("Metz", 11, 9, 11, 36, 36, 'metz.png'),
("Nice", 12, 6, 13, 41, 42, 'nice.png'),
("Angers", 11, 8, 12, 34, 44, 'angers.png'),
("Reims", 9, 12, 10, 38, 38, 'reims.png'),
("Strasbourg", 10, 6, 15, 40, 56, 'strasbourg.png'),
("Bordeaux", 10, 6, 15, 34, 41, 'bordeaux.png'),
("Saint-Étienne", 9, 9, 13, 32, 46, 'saint-etienne.png'),
("Brest", 10, 5, 16, 43, 54, 'brest.png'),
("Lorient", 8, 8, 15, 37, 54, 'lorient.png'),
("Nîmes", 8, 5, 18, 30, 58, 'nimes.png'),
("Nantes", 5, 13, 13, 32, 48, 'nantes.png'),
("Dijon", 2, 9, 20, 20, 53, 'dijon.png')
