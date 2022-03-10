USE webapp_database;
CREATE TABLE details(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `date` DATE NOT NULL,
    `hour` int NOT NULL,
    `language` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `contents` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO details(date, hour, language, contents) VALUES ('2021-12-2', 5, 'HTML', 'ドットインストール');
INSERT INTO details(date, hour, language, contents) VALUES ('2021-12-4', 6, 'CSS', 'N予備校');
INSERT INTO details(date, hour, language, contents) VALUES ('2021-12-6', 10, 'JavaScript', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2021-12-8', 13, 'PHP', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2021-12-10', 9, 'SQL', 'N予備校');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-2', 7, 'Laravel', 'ドットインストール');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-4', 8, 'HTML', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-6', 11, 'CSS', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-8', 15, '情報システム基礎知識', 'ドットインストール');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-10', 8, 'HTML', 'POSSE課題');