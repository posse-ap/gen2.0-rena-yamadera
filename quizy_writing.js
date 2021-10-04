var quizList = new Array();
quizList.push(['たかなわ','たかわ','こうわ']);
quizList.push(['かめいど','かめど','かめと']);
quizList.push(['こうじまち','おかとまち','かゆまち']);

var contents = `<div id="question"></div>`
    +  `<h1 class="header">x.この地名はなんて読む？</h1> `
    + `<div class="line"></div>`
    +`<img src="https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png" alt="高輪">`
    + `<ul>
     <li class="answerbutton" id="correct">たかなわ</li>
      <li class="answerbutton" id="wrong1">たかわ</li>
      <li class="answerbutton" id="wrong2">こうわ</li>
       </ul>`
     + `<div class="box disAppear" id="correctAnswer">`
          + `<p class="rightAnswer">正解！</p>`
           +`<p>正解は「たかなわ」です！</p>`
      +`</div>`
    +   `<div class="box disAppear" id="incorrect">`
           +`<p class="wrongAnswer">不正解！</p>`
           +`<p>正解は「たかなわ」です！</p>`
       +`</div> `

    const main = document.getElementById('main');
    main.insertAdjacentHTML("beforeend", contents);