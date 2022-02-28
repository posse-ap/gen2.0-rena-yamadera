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
    $stmt = $pdo->query("SELECT * FROM big_questions WHERE id ='". $id ."'");//レコード取って来る
    $area = $stmt->fetchAll(); //配列にする
    print_r($area[0]['name']) . PHP_EOL;

    $stmt = $pdo->query("SELECT * FROM questions WHERE big_question_id ='". $id ."'");
    $pic_areas = $stmt->fetchAll();
    // print_r($pic_area) . PHP_EOL;
    print_r($pic_areas[0]['image']) . PHP_EOL;

    $prob_stmt = $pdo->query("SELECT * FROM choices WHERE question_id ='". $id ."'");


    print_r($area);

if($id==1){
    $stmt = $pdo->query("SELECT * FROM choices WHERE question_id = 1 OR question_id=2");
    // global $choices;
    $choices = $stmt->fetchAll();
}else{
    $stmt = $pdo->query("SELECT * FROM choices WHERE question_id = 3");
    // global $choices;
    $choices = $stmt->fetchAll();
}
print_r($choices[0]['name']);


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
<?php foreach ($pic_areas as $i=>$pic_area){?>

    <h2 class="header"><?php echo ($i+1); ?>.この地名はなんて読む？</h2>
    <div class="line"></div>

    <img src="../img/<?=$pic_area['image'];?>" alt="aa">

    <ul>
    <?php for($j = 0; $j < 3; $j++){;?>
        <button class="answerbutton"><?php echo $choices[$i*3+$j]['name']?></button>

    <?php };?>

    </ul>
<?php }; ?>

    <script src="quizy.js">
    </script>
   </body>
   </html>
