USE webapp_database;
DROP TABLE IF EXISTS user;
CREATE TABLE user(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `grade` DECIMAL(9, 1) NOT NULL,
    `user_name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO user(grade, user_name) VALUES (2.0, 'Rena');

DROP TABLE IF EXISTS study_date;
CREATE TABLE study_date(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `date` DATE NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO study_date(date) VALUES ('2022-1-2');

DROP TABLE IF EXISTS study_contents;
CREATE TABLE study_contents(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `contents` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO study_contents(contents) VALUES ('POSSE課題');

DROP TABLE IF EXISTS study_language;
CREATE TABLE study_language(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `language` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO study_language(language) VALUES ('HTML');

DROP TABLE IF EXISTS study_hour;
CREATE TABLE study_hour(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `hour` int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO study_hour(hour) VALUES (2);




