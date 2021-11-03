"use strict";

$(function () {
    $('#openModal').click(function(){
        $('#modalArea').fadeIn();
    });
    $('#closeModal , #modalBg').click(function(){
      $('#modalArea').fadeOut();
    });
  });

//   import flatpickr from 'flatpickr/dist/flatpickr.min.js';
//   import { Japanese } from "flatpickr/dist/l10n/ja.js"
// flatpickr('#js-datepicker');
// flatpickr('#js-datepicker', {
//     locale : Japanese, // 日本語用モジュールを適用
//     dateFormat : 'Y.m.d（D）', // 2021.05.24（月）の形式で表示
//     defaultDate : new Date() // 入力エリアの初期値
//   });

jQuery(function($){
    $(document).ajaxSend(function() {
      $("#overlay").fadeIn(300);
    });
      
    $('#button').click(function(){
      $.ajax({
        type: 'GET',
        success: function(data){
          console.log(data);
        }
      }).done(function() {
        setTimeout(function(){
          $("#overlay").fadeOut(300);
        },3000);
      });
    }); 
  });

  const record = document.getElementById('button');
  const finished = document.getElementById("finished");
  
  function recordDone() {
    finished.classList.remove("finished_hide");
  }
    record.addEventListener('click', function(){
        window.setTimeout(recordDone, 3000);
    })
 

// var type = 'line';
// var data = {
//     labels: [2010, 2011, 2012, 2013],
//     datasets: [{
//         label:'@taguchi',
//         data: [120,300,200,210]
//     }, {
//         label:'@fkoji',
//         data: [180,200,300,110]
//     }]
// };
// var options;
// var ctx = document.getElementById('my_chart').getContext('2d');
// var myChart = new Chart(ctx, {
//     type: type,
//     data: data,
//     options: options
// });

// 棒グラフここから
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [,'2',,'4',,'6',,'8',,'10',,'12',,'14',,'16',,'18',,'20',,'22',,'24',,'26',,'28',,'30'],
    datasets: [
      {
        data: [6, 5, 3, 8, 1, 6, 4,8,7,3,4,1,7,8,8,4,5,6,7,8,5,2,1,3,5,4,6,5,7,6],
        backgroundColor: "#0e73be"
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
    title: {
      display: false,
    },
    legend:{
        display: false
    },
    scales: {
      xAxes:[{
          categoryPercentage:0.8,
          barPercentage:0.5
      }],
      yAxes: [{
        ticks: {
          suggestedMax: 8,
          suggestedMin: 0,
          stepSize: 2,
          callback: function(value, index, values){
            return  value +  'h'
          }
        }
      }]
    },
  }
});

var dataLabelPlugin = {
    afterDatasetsDraw: function (chart, easing) {
        // To only draw at the end of animation, check for easing === 1
        var context = chart.ctx;

        chart.data.datasets.forEach(function (dataset, i) {
            var dataSum = 0;
            dataset.data.forEach(function (element){
                dataSum += element;
            });

            var meta = chart.getDatasetMeta(i);
            if (!meta.hidden) {
                meta.data.forEach(function (element, index) {
                    // Draw the text in black, with the specified font
                    context.fillStyle = 'rgb(255, 255, 255)';

                    var fontSize = 12;
                    var fontStyle = 'normal';
                    var fontFamily = 'Helvetica Neue';
                    context.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                    // Just naively convert to string for now
                    var labelString = chart.data.labels[index];
                    var dataString = (Math.round(dataset.data[index] / dataSum * 1000)/10).toString() + "%";

                    // Make sure alignment settings are correct
                    context.textAlign = 'center';
                    context.textBaseline = 'middle';

                    var padding = 5;
                    var position = element.tooltipPosition();
                    // context.fillText(labelString, position.x, position.y - (fontSize / 2) - padding);
                    context.fillText(dataString, position.x, position.y + (fontSize / 2) - padding);
                });
            }
        });
    }
};

// 円グラフ1つ目
var ctx = document.getElementById("myPieChart");
var chart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["JavaScript", "CSS", "PHP", "HTML","Laravel","SQL","SHELL","情報システム基礎知識（その他）"],
    datasets: [{
        backgroundColor: [
            "#0345ec",
            "#0f71bd",
            "#20bdde",
            "#3ccefe",
            "#b29ef3",
            "#6d46ec",
            "#4917ea",
            "#3105c0"
        ],
        data: [42, 18, 10, 9, 8, 6, 5, 3],
    }]
  },
  options: {
    maintainAspectRatio: false,
    title: {
      display: true,
    },
    legend:{
        position: "bottom",
        labels:{
            boxWidth:10
        }
    },
},
plugins: [dataLabelPlugin]
});
// 円グラフ2つ目
var chart = document.getElementById("myDoughnutChart");
var myDoughnutChart = new Chart(chart, {
  type: 'doughnut',
  data: {
    labels: ["ドットインストール", "N予備校", "POSSE課題"],
    datasets: [{
        backgroundColor: [
            "#0345ec",
            "#0f71bd",
            "#20bdde"
        ],
        data: [42, 33, 25],
    }]
  },
  options: {
    maintainAspectRatio: false,
    title: {
      display: true,
    },
    legend:{
        position: "bottom",
        labels:{
            boxWidth:10
        }
    },
    
},
plugins: [dataLabelPlugin]
});


// twitter 遷移ボタン
document.getElementById("twitter").addEventListener('click', function(event) {
    event.preventDefault();
    var left = Math.round(window.screen.width / 2 - 275);
    var top = (window.screen.height > 420) ? Math.round(window.screen.height / 2 - 210) : 0;
    window.open(
        "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.getElementById("content")),
        null,
        // "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,left=" + left + ",top=" + top
        );
});