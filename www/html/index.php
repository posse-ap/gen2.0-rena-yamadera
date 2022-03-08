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
    print_r($area[0]['big_question_name']) . PHP_EOL;

    $stmt = $pdo->query("SELECT * FROM questions WHERE big_question_id ='". $id ."'");
    $pic_areas = $stmt->fetchAll();
    // print_r($pic_area) . PHP_EOL;
    print_r($pic_areas[0]['image']) . PHP_EOL;

    $prob_stmt = $pdo->query("SELECT * FROM choices WHERE question_id ='". $id ."'");



    print_r($area);

    $stmt = $pdo->query("SELECT name FROM mix WHERE valid = 1 AND big_question_id ='". $id ."'");
    $right = $stmt->fetchAll();
    echo $right[0]['name'];

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
print_r($choices[1]['valid']);


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
<h1 class="title">ガチで<?=$area[0]['big_question_name'];?>の人しか解けない！ ＃<?=$area[0]['big_question_name'];?>の難読地名クイズ</h1>

    <!-- <div id="question"></div> -->
<?php foreach ($pic_areas as $i=>$pic_area){?>

    <h2 class="header"><?php echo ($i+1); ?>.この地名はなんて読む？</h2>
    <div class="line"></div>

    <img src="../img/<?=$pic_area['image'];?>" alt="aa">

    <ul>
    <!-- <?php for($j = 0; $j < 3; $j++){;?>
        <button class="answerbutton" id=""><?php echo $choices[$i*3+$j]['name']?></button>

    <?php };?> -->
<?php
    $stmt = $pdo->query("SELECT * FROM choices WHERE question_id = $i + 1");
    $choices = $stmt->fetchAll();
    // dd($choices); 配列の中身確認
  
    shuffle($choices);
    
    foreach ($choices as $index => $choice){?>
 
    <button class="answerbutton" id="btn<?php echo $i?>_<?php echo $index?>"><?php echo $choice['name']; ?></button>
    <?php };?>
    </ul>
<?php }; ?>

    <script>
/*正誤判定*/
    
 <?php for($k = 0; $k<2; $k++){
        for($l = 0; $l<3; $l++){;?>

    document.getElementById('btn<?php echo $k;?>_<?php echo $l;?>').addEventListener('click', function() {
        if(document.getElementById("btn<?php echo $k;?>_<?php echo $l;?>").innerHTML=='<?php echo $right[$k]['name'];?>'){
            console.log('ok');
        } else {
            console.log('ng');
        }
    })
 

    <?php };?>
    <?php };?>
    
    </script>
   
   </body>
   </html>
