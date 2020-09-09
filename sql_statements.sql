-- create table account

CREATE TABLE account(
    id int not null AUTO_INCREMENT,
    email varchar(250) unique,
    password varchar(250),
    PRIMARY KEY (ID)
);

CREATE TABLE persoon (
  id int not null AUTO_INCREMENT,
  Voornaam varchar(250),
  Achternaam varchar(250),
  Telefoon int,
  Gebruikersnaam varchar(250),
  PRIMARY KEY (id),
  FOREIGN KEY (id) REFERENCES account (id)
);
