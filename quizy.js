'user strict';

    document.getElementById('correct').addEventListener('click', () =>{
        document.getElementById('correct').style.background= "#287dff" ;
        document.getElementById('correct').style.color = "white";

    })
    
    document.getElementById('wrong1').addEventListener('click', () =>{
        document.getElementById('wrong1').style.background= "#ff5128";
        document.getElementById('wrong1').style.color = "#ffffff"
    })

    document.getElementById('wrong2').addEventListener('click', () =>{
        document.getElementById('wrong2').style.background= "#ff5128";
        document.getElementById('wrong2').style.color = "#ffffff"
    })

    const div = document.createElement('div');
    // // constの名前をdivからresultsに変更したi
    // div.classList.add('box');
    document.getElementById('div')
    div.classList.add('box')

    document.getElementById("correct").addEventListener('click', () =>{
        document.body.appendChild(div);
        div.textContent = '正解';
    })
    
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
    // }
     //    div.classList.toggle('box')