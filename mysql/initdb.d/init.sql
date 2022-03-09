USE webapp_database;
CREATE TABLE details(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `date` DATE NOT NULL,
    `hour` int NOT NULL,
    `language` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `contents` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO details(date, hour, language, contents) VALUES ('2021-12-5', 5, 'HTML', 'ドットインストール');
INSERT INTO details(date, hour, language, contents) VALUES ('2021-12-8', 6, 'CSS', 'N予備校');
INSERT INTO details(date, hour, language, contents) VALUES ('2021-12-10', 10, 'JavaScript', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2021-12-14', 13, 'PHP', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2021-12-25', 9, 'SQL', 'N予備校');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-5', 7, 'Laravel', 'ドットインストール');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-13', 8, 'HTML', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-20', 11, 'CSS', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-24', 15, '情報システム基礎知識', 'ドットインストール');