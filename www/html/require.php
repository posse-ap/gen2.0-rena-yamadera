<?php
try{
    
    $pdo = new PDO(
        //DSN
        'mysql:host=db;dbname=webapp_database;charset=utf8mb4',
        //user
        'rena',
        //password
        'secret',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            ]
        );
    }catch(PDOException $e){
        echo $e -> getMessage() . PHP_EOL;
        exit;
    };
$stmt = $pdo->query("SELECT * FROM study_hour");
$area = $stmt->fetchAll();

$all_sum = array_sum(array_column($area, 'hour'));

$stmt = $pdo->query("SELECT * FROM mix WHERE MONTH(date) = 1");
$this_month = $stmt->fetchAll();    
$sum_month = array_sum(array_column($this_month, 'hour'));

$stmt = $pdo->query("SELECT * FROM mix ORDER BY date DESC LIMIT 1");
$today = $stmt->fetchAll();

// $stmt = $pdo->query("SELECT * FROM mix WHERE id in (SELECT id FROM mix GROUP BY id)");
$stmt = $pdo->query("SELECT id, sum(hour) from mix group by id;");
$each_days = $stmt->fetchAll();
?>

 