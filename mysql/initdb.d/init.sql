USE webapp_database;
CREATE TABLE details(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `date` DATE NOT NULL,
    `hour` int NOT NULL,
    `language` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `contents` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-2', 5, 'HTML', 'ドットインストール');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-4', 6, 'CSS', 'N予備校');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-6', 10, 'JavaScript', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-8', 13, 'PHP', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-1-10', 9, 'SQL', 'N予備校');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-2', 7, 'Laravel', 'ドットインストール');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-4', 8, 'HTML', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-6', 11, 'CSS', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-8', 15, '情報システム基礎知識', 'ドットインストール');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-10', 1, '情報システム基礎知識', 'ドットインストール');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-12', 4, 'HTML', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-12', 8, 'CSS', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-14', 8, 'HTML', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-16', 5, 'JavaScript', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-18', 2, 'HTML', 'POSSE課題');
INSERT INTO details(date, hour, language, contents) VALUES ('2022-2-20', 8, 'HTML', 'POSSE課題');