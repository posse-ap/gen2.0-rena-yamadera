USE quizy_database;
CREATE TABLE big_questions(
 `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `name`  text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO big_questions(name) VALUES ('東京');
INSERT INTO big_questions(name) VALUES ('広島');
