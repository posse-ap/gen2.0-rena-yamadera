<!-- <?php
phpinfo();
?> -->
<?php
try{
    
    $pdo = new PDO(
        //DSN
        'mysql:host=db;dbname=quizy_database;charset=utf8mb4',
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
    $id = filter_input(INPUT_GET, 'id');
    $stmt = $pdo->query("SELECT * FROM big_questions WHERE id ='". $id ."'");
    $area = $stmt->fetchAll();
    print_r($area[0]['name']) . PHP_EOL;
    
//     echo $area[$id];
//     $stmt1 = $pdo->query("SELECT name FROM big_questions WHERE id ='". $id ."'");
//     $areaname = $stmt1->fetchAll();
// ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizy</title>
    <link rel="stylesheet" href="quizy.css">
</head>
<body>
<h1 class="title">ガチで<?=$area[0]['name'];?>の人しか解けない！ ＃<?=$area[0]['name'];?>の難読地名クイズ</h1>

    <div id="question"></div>

    <script src="quizy.js">
    </script>
   </body>
   </html>
