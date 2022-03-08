USE webapp_database;
CREATE TABLE details(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `日付` DATE NOT NULL,
    `学習時間` int NOT NULL,
    `学習コンテンツ` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;