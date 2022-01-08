USE quizy_database;
CREATE TABLE big_questions(
 id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 name varchar(255)
);
INSERT INTO big_questions(name) VALUES ('東京');
INSERT INTO big_questions(name) VALUES ('広島');
