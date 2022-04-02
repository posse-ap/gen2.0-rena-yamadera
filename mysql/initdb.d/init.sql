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

INSERT INTO study_date(date) VALUES ('2022-1-1');
INSERT INTO study_date(date) VALUES ('2022-1-2');
INSERT INTO study_date(date) VALUES ('2022-1-3');
INSERT INTO study_date(date) VALUES ('2022-1-4');
INSERT INTO study_date(date) VALUES ('2022-1-5');
INSERT INTO study_date(date) VALUES ('2022-1-6');
INSERT INTO study_date(date) VALUES ('2022-1-7');
INSERT INTO study_date(date) VALUES ('2022-1-8');
INSERT INTO study_date(date) VALUES ('2022-1-9');
INSERT INTO study_date(date) VALUES ('2022-1-10');

DROP TABLE IF EXISTS study_contents;
CREATE TABLE study_contents(
    `contents_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `date` DATE NOT NULL,
    `contents` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO study_contents(date, contents) VALUES ('2022-1-1', 'POSSE課題');
INSERT INTO study_contents(date, contents) VALUES ('2022-1-1', 'ドットインストール');
INSERT INTO study_contents(date, contents) VALUES ('2022-1-3', 'N予備校');
INSERT INTO study_contents(date, contents) VALUES ('2022-1-4', 'POSSE課題');
INSERT INTO study_contents(date, contents) VALUES ('2022-1-5', 'ドットインストール');
INSERT INTO study_contents(date, contents) VALUES ('2022-1-6', 'N予備校');
INSERT INTO study_contents(date, contents) VALUES ('2022-1-6', 'POSSE課題');
INSERT INTO study_contents(date, contents) VALUES ('2022-1-8', 'POSSE課題');
INSERT INTO study_contents(date, contents) VALUES ('2022-1-9', 'ドットインストール');
INSERT INTO study_contents(date, contents) VALUES ('2022-1-10', 'N予備校');
SELECT study_date.id, study_date.date, study_contents.contents FROM study_date LEFT JOIN study_contents ON study_date.date = study_contents.date;

DROP TABLE IF EXISTS study_language;
CREATE TABLE study_language(
    `language_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `date` DATE NOT NULL,
    `language` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO study_language(date, language) VALUES ('2022-1-1', 'HTML');
INSERT INTO study_language(date, language) VALUES ('2022-1-1', 'CSS');
INSERT INTO study_language(date, language) VALUES ('2022-1-3', 'JavaScript');
INSERT INTO study_language(date, language) VALUES ('2022-1-4', 'PHP');
INSERT INTO study_language(date, language) VALUES ('2022-1-5', 'HTML');
INSERT INTO study_language(date, language) VALUES ('2022-1-6', 'SQL');
INSERT INTO study_language(date, language) VALUES ('2022-1-6', 'SQL');
INSERT INTO study_language(date, language) VALUES ('2022-1-8', 'CSS');
INSERT INTO study_language(date, language) VALUES ('2022-1-9', 'HTML');
INSERT INTO study_language(date, language) VALUES ('2022-1-10', 'HTML');
SELECT study_date.id, study_date.date, study_language.language FROM study_date LEFT JOIN study_language ON study_date.date = study_language.date;

DROP TABLE IF EXISTS study_hour;
CREATE TABLE study_hour(
    `hour_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `date` DATE NOT NULL,
    `hour` int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO study_hour(date, hour) VALUES ('2022-1-1', 2);
INSERT INTO study_hour(date, hour) VALUES ('2022-1-1', 3);
INSERT INTO study_hour(date, hour) VALUES ('2022-1-3', 5);
INSERT INTO study_hour(date, hour) VALUES ('2022-1-4', 2);
INSERT INTO study_hour(date, hour) VALUES ('2022-1-5', 1);
INSERT INTO study_hour(date, hour) VALUES ('2022-1-6', 3);
INSERT INTO study_hour(date, hour) VALUES ('2022-1-8', 4);
INSERT INTO study_hour(date, hour) VALUES ('2022-1-8', 1);
INSERT INTO study_hour(date, hour) VALUES ('2022-1-9', 1);
INSERT INTO study_hour(date, hour) VALUES ('2022-1-10', 4);
SELECT study_date.id, study_date.date, study_hour.hour 
FROM 
(study_date LEFT JOIN study_hour ON study_date.date = study_hour.date);

DROP TABLE IF EXISTS mix;
CREATE TABLE mix as (
    SELECT 
    study_date.id, 
    study_date.date, 
    study_hour.hour, 
    study_language.language, 
    study_contents.contents
    FROM 
    ((study_date LEFT JOIN study_hour ON study_date.date = study_hour.date)     
    LEFT JOIN study_language ON study_hour.hour_id = study_language.language_id)
    LEFT JOIN study_contents ON study_language.language_id = study_contents.contents_id);

--  ((study_date LEFT JOIN study_hour ON study_date.date = study_hour.date)     
--  LEFT JOIN study_language ON study_hour.hour_id = study_language.language_id)
--  LEFT JOIN study_contents ON study_language.language_id = study_contents.contents_id;

DROP TABLE IF EXISTS language_color;
CREATE TABLE language_color(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `language` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `color` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO language_color(language, color) VALUES ('JavaScript', '#0345ec');
INSERT INTO language_color(language, color) VALUES ('CSS', '#0f71bd');
INSERT INTO language_color(language, color) VALUES ('PHP', '#20bdde');
INSERT INTO language_color(language, color) VALUES ('HTML', '#3ccefe');
INSERT INTO language_color(language, color) VALUES ('Laravel', '#b29ef3');
INSERT INTO language_color(language, color) VALUES ('SQL', '#6d46ec');
INSERT INTO language_color(language, color) VALUES ('SHELL', '#4917ea');
INSERT INTO language_color(language, color) VALUES ('情報システム基礎知識（その他）', '#3105c0');

DROP TABLE IF EXISTS contents_color;
CREATE TABLE contents_color(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `contents` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `color` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO contents_color(contents, color) VALUES ('ドットインストール', '#0345ec');
INSERT INTO contents_color(contents, color) VALUES ('N予備校', '#0f71bd');
INSERT INTO contents_color(contents, color) VALUES ('POSSE課題', '#20bdde');

DROP TABLE IF EXISTS mix_lang_color;
CREATE TABLE mix_lang_color as (
SELECT
    mix.hour, mix.language, language_color.color
FROM
    mix join language_color ON mix.language = language_color.language);

DROP TABLE IF EXISTS mix_contents_color;
CREATE TABLE mix_contents_color as (
SELECT
    mix.hour, mix.contents, contents_color.color
FROM
    mix join contents_color ON mix.contents = contents_color.contents);




