'user strict';

// デザインのものは全てCSSで書いた方がいい
const correct = document.getElementById('correct');
const wrong1 = document.getElementById('wrong1');
const wrong2 = document.getElementById('wrong2');
const results = document.createElement('div');
results.classList.add('box');

    correct.addEventListener("click", () => {
      correct.classList.add("right");
      document.body.appendChild(results);
      results.textContent = '正解';
    });

    wrong1.addEventListener("click", () => {
      wrong1.classList.add("false");
      document.body.appendChild(results);
      results.classList.add('wrongAnswer');
    });

    wrong2.addEventListener("click", () => {
      wrong2.classList.add("false");
      document.body.appendChild(results);
      results.classList.add('wrongAnswer');

    // const div = document.createElement('div');
    // // constの名前をdivからresultsに変更したi
    // div.classList.add('box');
    // document.getElementById('div')
    // div.classList.add('box')

    // correct.addEventListener('click', () =>{
    //     document.body.appendChild(div);
    //     div.textContent = '正解';
    // })

    // document.getElementById("wrong1").addEventListener('click', () =>{
    //     document.body.appendChild(div);
    //     div.textContent = '不正解';
    // })
    // document.getElementById("wrong2").addEventListener('click', () =>{
    //     document.body.appendChild(div);
    //     div.textContent = '不正解';
    // })
    




    
    
    // document.getElementById("correct").addEventListener = ('click, () 
    //     document.getElementById('div')
    //     div.classList.add('box')

    // })
     
       
        
    // const div = document.createElement('div');
    // constの名前をdivからresultsに変更したい
    // div.classList.add('box');
    // div.addEventListener('click', () =>{
    //     if (document.getElementById('correct')){
    //         div.textContent = '正解';
    //     }
    //     else(
    //         div.textContent = '不正解'
    //     )
   
        
    // })
    // document.body.appendChild(div);
    // div.classList.toggle('box')
    // if ('correct'){
    //     div.textContent = '正解';
    // } else{
    //     div.textContent = '不正解'