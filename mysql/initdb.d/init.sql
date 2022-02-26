USE quizy_database;
CREATE TABLE big_questions(
 `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO big_questions(name) VALUES ('東京');
INSERT INTO big_questions(name) VALUES ('広島');

CREATE TABLE questions(
 `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `big_question_id` int NOT NULL,
 `image` VARCHAR(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO questions(big_question_id, image) VALUES (1, 'takanawa.png');
INSERT INTO questions(big_question_id, image) VALUES (1, 'kameido.png');
INSERT INTO questions(big_question_id, image) VALUES (2, 'mukainada.png');

CREATE TABLE choices(
 `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `question_id` int NOT NULL,
 `name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
 `valid` int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO choices(question_id, name, valid) VALUES (1, 'たかなわ', 1);
INSERT INTO choices(question_id, name, valid) VALUES (1, 'たかわ', 0);
INSERT INTO choices(question_id, name, valid) VALUES (1, 'こうわ', 0);
INSERT INTO choices(question_id, name, valid) VALUES (2, 'かめと', 0);
INSERT INTO choices(question_id, name, valid) VALUES (2, 'かめど', 0);
INSERT INTO choices(question_id, name, valid) VALUES (2, 'かめいど', 1);
INSERT INTO choices(question_id, name, valid) VALUES (3, 'むこうひら', 0);
INSERT INTO choices(question_id, name, valid) VALUES (3, 'むきひら', 0);
INSERT INTO choices(question_id, name, valid) VALUES (3, 'むかいなだ', 1);
