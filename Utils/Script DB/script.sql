DROP TABLE IF EXISTS utilisateur CASCADE;

CREATE table administrateur(
                               "nom" varchar(55) ,
                               "prenom" varchar(50),
                               "mail" varchar(50),
                               "mdp" varchar(50),
                               "role" varchar(50),
                               "date_creation" date
);

insert into administrateur(nom, prenom, mail, mdp, role, date_creation) VALUES ('darius', 'buzura', 'dariusbuzura@gmail.com', 'admin', 'admin', '01-03-2003')