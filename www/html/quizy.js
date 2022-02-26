'user strict';

const problem =  [
    ['たかなわ','たかわ','こうわ'],
    ['かめいど','かめど','かめと'],
    ['こうじまち','かゆまち','おかとまち'],
    ['おなりもん','おかどもん','ごせいもん'],
    ['とどろき','たたりき','たたら'],
    ['しゃくじい','いじい','せきこうい'],
    ['ぞうしき','ざっしょく','ざっしき'],
    ['おかちまち','みとちょう','ごしろちょう'],
    ['ししぼね','ろっこつ','しこね'],
    ['こぐれ','こしゃく','こばく']
]

for (let i = 0; i < 10; i++){

const picture = ['https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png','https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png','https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png','https://d1khcm40x1j0f.cloudfront.net/quiz/ee645c9f43be1ab3992d121ee9e780fb.png','https://d1khcm40x1j0f.cloudfront.net/quiz/6a235aaa10f0bd3ca57871f76907797b.png','https://d1khcm40x1j0f.cloudfront.net/quiz/0b6789cf496fb75191edf1e3a6e05039.png','https://d1khcm40x1j0f.cloudfront.net/quiz/23e698eec548ff20a4f7969ca8823c53.png','https://d1khcm40x1j0f.cloudfront.net/quiz/50a753d151d35f8602d2c3e2790ea6e4.png','https://d1khcm40x1j0f.cloudfront.net/words/8cad76c39c43e2b651041c6d812ea26e.png','https://d1khcm40x1j0f.cloudfront.net/words/34508ddb0789ee73471b9f17977e7c9c.png']

// ヘッダー
const question = document.getElementById("question");
const head = document.createElement("h1");
head.classList.add("header")
head.innerText = `${i+1}.この地名は何と読む？`;
question.appendChild(head);

// 下線のdiv
const underLine = document.createElement("div");
underLine.classList.add("line");
question.appendChild(underLine);

const questionPic = document.createElement("img");
questionPic.src = `${picture[i]}`;
questionPic.alt = '高輪';
question.appendChild(questionPic);

// 正解のボタン作成
const choiceBox = document.createElement("ul");
const ansButton = document.createElement("button");
ansButton.classList.add("answerbutton");
ansButton.id = `correct${i}`;
ansButton.innerText = `${problem[i][0]}`;

// 1つ目の不正解ボタン作成
const ansButtonFalse = document.createElement("button");
ansButtonFalse.classList.add("answerbutton");
ansButtonFalse.id = `wrong${i}`;

ansButtonFalse.innerText =`${problem[i][1]}`;

// 2つ目の不正解ボックス作成
const ansButtonWrong = document.createElement("button");
ansButtonWrong.classList.add("answerbutton");
ansButtonWrong.id = `notRight${i}`;

ansButtonWrong.innerText = `${problem[i][2]}`;

const shuffle = [ansButton,ansButtonFalse,ansButtonWrong]

function shuffleFunc(shuffle){
    for(var i = shuffle.length - 1; i > 0; i--){
    var r = Math.floor(Math.random() * (i + 1));
    // var tmp = shuffle[i];
    [shuffle[r],shuffle[i]] = [shuffle[i],shuffle[r]];
    
    }
    return shuffle;
};

shuffleFunc(shuffle);

choiceBox.appendChild(shuffle[0]);
question.appendChild(choiceBox);

choiceBox.appendChild(shuffle[1]);
question.appendChild(choiceBox);

choiceBox.appendChild(shuffle[2]);
question.appendChild(choiceBox);

//正解時の詳細ボックス
const rightDisplay = document.createElement("div");
rightDisplay.classList.add("box");
rightDisplay.classList.add("disAppear");
rightDisplay.id = `correctAnswer${i}`;
const displayRight = document.createElement("p");
displayRight.classList.add("rightAnswer");
displayRight.innerText = "正解！";
const detailRight = document.createElement("p");
detailRight.innerText = "正解は「" + `${problem[i][0]}` + "」です！";
rightDisplay.appendChild(displayRight);
rightDisplay.appendChild(detailRight);
question.appendChild(rightDisplay);

const wrongDisplay = document.createElement("div");
wrongDisplay.classList.add("box");
wrongDisplay.classList.add("disAppear");
wrongDisplay.id = `incorrect${i}`;
const displayWrong = document.createElement("p");
displayWrong.classList.add("wrongAnswer");
displayWrong.innerText = "不正解！";
const detailWrong = document.createElement("p");
detailWrong.innerText = "正解は「" + `${problem[i][0]}` + "」です！";
wrongDisplay.appendChild(displayWrong);
wrongDisplay.appendChild(detailWrong);
question.appendChild(wrongDisplay);


let correct = document.getElementById(`correct${i}`);
let wrong1 = document.getElementById(`wrong${i}`);
let wrong2 = document.getElementById(`notRight${i}`);
let results = document.createElement('div');
let correctAnswer = document.getElementById(`correctAnswer${i}`);
let incorrect = document.getElementById(`incorrect${i}`);

    correct.addEventListener("click", ok);
    wrong1.addEventListener("click", error1);
    wrong2.addEventListener("click", error2);

    function ok() {
        correct.classList.add("right");
        wrong1.classList.remove("false");
        wrong2.classList.remove("false");

        correctAnswer.classList.remove("disAppear");
        incorrect.classList.add("disAppear");
    }

    function error1() {
        correct.classList.remove("right");
        wrong1.classList.add("false");
        wrong2.classList.remove("false");
  
        incorrect.classList.remove('disAppear');
        correctAnswer.classList.add('disAppear')
    }

    function error2() {
        correct.classList.remove("right");
        wrong1.classList.remove("false");
        wrong2.classList.add("false");
  
        incorrect.classList.remove('disAppear');
        correctAnswer.classList.add('disAppear');
    }
    
}
    