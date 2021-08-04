'user strict';

// デザインのものは全てCSSで書いた方がいい
const correct = document.getElementById('correct');
const wrong1 = document.getElementById('wrong1');
const wrong2 = document.getElementById('wrong2');
const results = document.createElement('div');
const correctAnswer = document.getElementById('correctAnswer');
const incorrect = document.getElementById('incorrect');


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

   


    
    
    