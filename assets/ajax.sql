------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE `blogsjt` CHARACTER SET utf8;

USE `blogsjt`;

#------------------------------------------------------------
# Table: ajax_user
#------------------------------------------------------------

CREATE TABLE ajax_user
(
        id         Int  Auto_increment  NOT NULL PRIMARY KEY ,
        email       Varchar (100) NOT NULL UNIQUE ,
        pass       Varchar (255) NOT NULL ,
        created_at    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        token       Varchar (255) NOT NULL,
        role       Varchar (255) NOT NULL DEFAULT 'user'
)ENGINE=InnoDB;

INSERT INTO `ajax_user`(`email`, `pass`, `token`) VALUES('test@test.com', '$2y$10$9GA2DkiD1MZXhaVb9vqmI.1n7GxDFQiBSUz9jGvRp7ShulNwGRqq6', 'nzklgveoihbvpiefjbp978989709uiH98908');
