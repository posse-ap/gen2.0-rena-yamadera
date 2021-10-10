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

// function check(question_id, selection_id, valid_id){
// var buttonLists = document.getElementsByName('buttonLists')
//  buttonLists.forEach(buttonList =>{
//     buttonList.style.pointerEvents = 'none';
//  });
// }
// function createHtml(question_id, selection_id, valid_id){
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
           +`<p>正解は「たかなわ」です！</p>`
      +`</div>`
    +   `<div class="box disAppear" id="incorrect${i}">`
           +`<p class="wrongAnswer">不正解！</p>`
           +`<p>正解は「たかなわ」です！</p>`
       +`</div> `
    // }
    const main = document.getElementById('main');
    main.insertAdjacentHTML("beforeend", contents);
}
   

    

    