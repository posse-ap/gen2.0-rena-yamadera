'use strict';
var quizList = new Array();
quizList.push(['たかなわ','たかわ','こうわ']);
quizList.push(['かめいど','かめど','かめと']);
quizList.push(['こうじまち','おかとまち','かゆまち']);
quizList.push(['おなりもん','おかどもん','ごせいもん']);
quizList.push(['とどろき','たたりき','たたら']);
quizList.push(['しゃくじい','いじい','せきこうい']);
quizList.push(['ぞうしき','ざっしょく','ざっしき']);
quizList.push(['おかちまち','みとちょう','ごしろちょう']);
quizList.push(['ししぼね','ろっこつ','しこね']);
quizList.push(['こぐれ','こしゃく','こばく']);

for (let i = 0; i < 10; i++){
var contents = `<div id="question"></div>`
    +  `<h1 class="header">${i+1}.この地名はなんて読む？</h1> `
    + `<div class="line"></div>`
    +`<img src="./img/${i+1}.png" alt="">`
    + `<ul>
     <li class="answerbutton" id="correct${i}">${quizList[i][0]}</li>
      <li class="answerbutton" id="wrong1${i}">${quizList[i][1]}</li>
      <li class="answerbutton" id="wrong2${i}">${quizList[i][2]}</li>
       </ul>`
     + `<div class="box disAppear" id="correctAnswer${i}">`
          + `<p class="rightAnswer">正解！</p>`
           +`<p>正解は「${quizList[i][0]}」です！</p>`
      +`</div>`
    +   `<div class="box disAppear" id="incorrect${i}">`
           +`<p class="wrongAnswer">不正解！</p>`
           +`<p>正解は「${quizList[i][0]}」です！</p>`
       +`</div> `

const rightVer = document.getElementById(`correct${i}`);
var wrong1 = document.getElementById(`wrong1${i}`);
var wrong2 = document.getElementById(`wrong2${i}`);

// rightVer.classList.add("right");

// wrong1.className.add("false");

// function ok() { 
//     rightVer.classList.add("right");

// }


    function shuffleFunc(shuffle){
        for(var i = shuffle.length -1; i > 0; i--){
            var r = Math.floor(Math.random() * (i + 1));
            [shuffle[r],shuffle[i]] = [shuffle[i],shuffle[r]];
        }
        return shuffle;
    };


    const main = document.getElementById('main');
    main.insertAdjacentHTML("beforeend", contents);
}
   

    

    