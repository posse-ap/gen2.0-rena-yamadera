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
    div.classList.add('box');

    div.addEventListener('click', () =>{
        div.classList.toggle('box')
    })
    document.body.appendChild(div);