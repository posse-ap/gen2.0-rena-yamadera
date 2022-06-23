<?php 
$tokyo_all=[
    ['むかいなだ','むこうなだ','むこうよう'],
    ['みつぎ', 'おしらべ', 'みよし'],
    ['かなやま','ぎんざん','きやま'],
]
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizy</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<h1 class="title">ガチで広島の人しか解けない！ ＃広島の難読地名クイズ</h1>
    <!-- <div id="question"></div> -->
    @foreach($tokyo_all as $tokyo_each)

    <h2 class="header">{{ $loop->iteration }}.この地名はなんて読む？</h2>
    <div class="line"></div>
    <img src="{{ asset('img/hiroshima/'.$loop->iteration.'.png') }}" alt="aa">
    <ul>
    
    @foreach($tokyo_each as $each_name)
            <button class="answerbutton">{{ $each_name }}</button>
    @endforeach
@endforeach
<!-- シャフルのやつ消したから後で取ってくる -->

   </body>
   </html>