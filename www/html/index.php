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
$stmt = $pdo->query("SELECT * FROM details");
$area = $stmt->fetchAll();


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top画面</title>
    <link rel="stylesheet" href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
    <link rel="stylesheet" href="webapp.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
</head>
<body>
<!-- header -->
<header class="header">
	<div class="header_img_box">
		<img class="header_img" src="./img/posselogo.png" alt="">
	</div>
	<div class="header_text_box">
		<p class="header_text">4th week</p>
	</div>
	<div class="header_button_box">
		<button class="header_button" id="openModal">記録・投稿</button>
	</div>
</header>
<div class="all_box">


	<!-- time box -->
	<div class="largest_box">
		<div class="second_box">
			<div class="time_boxes">
				<div class="time_box">
					<p class="time_title">Today</p>
					<p class="time_number">3</p>
					<p class="time_hour">hour</p>
				</div>
				<div class="time_box">
					<p class="time_title">Month</p>
					<p class="time_number">120</p>
					<p class="time_hour">hour</p>
				</div>
				<div class="time_box">
					<p class="time_title">Total</p>
					<p class="time_number">1348</p>
					<p class="time_hour">hour</p>
				</div>
			</div>

			<!-- graph -->
			<div class="graph_box">
				<canvas id="myBarChart" class="bar_chart">
				</canvas>
			</div>

		</div>

		<div class="second_box">
			<!-- circle graph -->
			<div class="circle_graphs">
				<div class="circle_box">
					<p class="circle_text">学習言語</p>
					<div class="doughnut_graph">
						<canvas id="myPieChart" class="doughnut_chart"></canvas>
					</div>
				</div>
				<div class="circle_box">
					<p class="circle_text">学習コンテンツ</p>
					<div class="doughnut_graph">
						<canvas id="myDoughnutChart" class="doughnut_chart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- date -->
	<div class="bottom_box">
		<i class="fas fa-chevron-left"></i>
		<p class="bottom_month">
			 <2020年10月>
		</p>
		<i class="fas fa-chevron-right"></i>
		
	</div>

</div>



<!-- モーダルエリアここから -->
<section id="modalArea" class="modalArea">
  <div id="modalBg" class="modalBg"></div>
  <div class="modalWrapper">
    <div class="modalContents">
        <div class="modal_boxes">
            <div class="modal_box" id="date_box">
                <div class="">
									<h1 class="modal_head">学習日</h1>
                    <input type="date" name="datepicker" id="=js-datepicker">
                </div>
                <div>
									<h1 class="modal_head">学習コンテンツ（複数選択可</h1>
										<div  class="modal_check_box">
                    <label  class="modal_input_check" for=""><input type="checkbox" name="" id="">N予備校</label>
                    <label  class="modal_input_check" for=""><input type="checkbox" name="" id="">ドットインストール</label>
                    <label  class="modal_input_check" for=""><input type="checkbox" name="" id="">POSSE課題</label>
									  </div>
									</div>
                <div>
									<h1 class="modal_head">学習言語（複数選択可）</h1>
										<div  class="modal_check_box">
                    <label  class="modal_input_check" for=""><input class="" type="checkbox" name="" id="">HTML</label>
                    <label  class="modal_input_check" for=""><input type="checkbox" name="" id="">CSS</label>
                    <label  class="modal_input_check" for=""><input type="checkbox" name="" id="">JavaScript</label>
                    <label  class="modal_input_check" for=""><input type="checkbox" name="" id="">PHP</label>
                    <label  class="modal_input_check" for=""><input type="checkbox" name="" id="">Laravel</label>
                    <label  class="modal_input_check" for=""><input type="checkbox" name="" id="">SQL</label>
                    <label  class="modal_input_check" for=""><input type="checkbox" name="" id="">SHELL</label>
                    <label  class="modal_input_check" for=""><input type="checkbox" name="" id="">情報システム基礎知識（その他</label>
									</div>
                </div>
            </div>
            <div class="modal_box">
                <div class="modal_hour">
									<h1 class="modal_head">学習時間</h1>
                    <input class="modal_input hour_input" type="text">
                </div>
                <div class="modal_twitter">
									<h1 class="modal_head">Twitter用コメント</h1>
									<textarea class="modal_input twitter_input" name="" id="twitter_text" cols="30" rows="10"></textarea>
                    <!-- <input class="modal_input twitter_input" type="text"> -->
                </div>
								<label  class="" for=""><input class="twitter_check" type="checkbox" name="" id="twitter_check">Twitterに自動投稿する</label>
            </div>
        </div>
        <button class="modal_button" id="button" type="button">記録・投稿</button>
					<!-- ローディング画面 -->
				<div id="overlay">
					<div class="cv-spinner">
						<span class="spinner"></span>
					</div>
				</div>
				<!-- 完了画面 -->
				<div id="finished" class="finished_hide">
					<div class="finished_box">
					<img src="./img/awesome.png" alt="">
					<p>記録・投稿<br>完了しました</p>
				</div>
				</div>
    </div>

    <div id="closeModal" class="closeModal">
			<p class="closeModal_close">×</p>
    </div>
  </div>

</section>

<!-- 日付 -->
<section id="modalArea" class="modalArea">
  <div id="modalBg" class="modalBg"></div>
  <div class="modalWrapper"></div>
    <div class="modalContents">
			
		</div>
</section>	

<?php
print_r($area[0]['hour']) . PHP_EOL;
?>

	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
	<script src="webapp.js"></script>
</body>
</html>