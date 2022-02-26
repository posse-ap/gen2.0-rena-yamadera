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
    $area = $stmt->fetchAll(); //レコード取って来る
    print_r($area[0]['name']) . PHP_EOL;

    $pic_stmt = $pdo->query("SELECT * FROM questions WHERE big_question_id ='". $id ."'");
    $pic_area = $pic_stmt->fetchAll();
    print_r($pic_area[0]['image']) . PHP_EOL;
    print_r($pic_area[1]['image']) . PHP_EOL;

    $prob_stmt = $pdo->query("SELECT * FROM choices WHERE question_id ='". $id ."'");


    print_r($area);
    
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

    <!-- <div id="question"></div> -->

    <h2 class="header">この地名はなんて読む？</h2>
    <div class="line"></div>

    <img src="../img/<?=$pic_area[0]['image'];?>" alt="aa">

    <ul>
        <button class="answerbutton"></button>
        <button class="answerbutton"></button>
        <button class="answerbutton"></button>
</ul>

    <script src="quizy.js">
    </script>
   </body>
   </html>
