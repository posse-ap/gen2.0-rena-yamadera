<?php require("require.php");?>
console.log('<?= date('t', strtotime('2022-1-12'));?>')
<!-- console.log('<?= $today[0]['date'];?>'); -->

"use strict";
$(function () {
    $('#openModal').click(function(){
        $('#modalArea').fadeIn();
    });
    $('#closeModal , #modalBg').click(function(){
      $('#modalArea').fadeOut();
    });
  });



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
        data: [
         <?php 
        foreach ($each_days as $index => $each_day){
          echo $each_day['sum(hour)'];
		      echo ",";
        };
        ?>
      ],    
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
          barPercentage:0.5,
         
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
    labels: [
      <?php  foreach ($sum_language as $each_lang){
          echo '"';
          echo $each_lang['language'];
          echo '"';
		      echo ",";

        };  ?> 
        ],
    datasets: [{
        backgroundColor: [
          <?php foreach ($sum_language as $each_lang){
          echo '"';
          echo $each_lang['color'];
          echo '"';
		      echo ",";
        }; ?>
        ],
        data: [
          <?php foreach ($sum_language as $each_lang){
          echo $each_lang['sum(hour)'];
		      echo ",";
        }; ?>
        ],
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
    labels: [
      <?php  foreach ($sum_contents as $each_contents){
          echo '"';
          echo $each_contents['contents'];
          echo '"';
		      echo ",";
        };  ?> 
    ],
    datasets: [{
        backgroundColor: [
          <?php  foreach ($sum_contents as $each_contents){
          echo '"';
          echo $each_contents['color'];
          echo '"';
		      echo ",";
        };  ?> 
        ],
        data: [
          <?php  foreach ($sum_contents as $each_contents){
          echo $each_contents['sum(hour)'];
		      echo ",";
        };  ?> 
        ],
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
let twitter_check = document.getElementById('twitter_check');
let record_button = document.getElementById('button');
function record_post(){
    if (twitter_check.checked) {
        event.preventDefault();
        var left = Math.round(window.screen.width / 2 - 275);
        var top = (window.screen.height > 420) ? Math.round(window.screen.height / 2 - 210) : 0;
        window.open(
            "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.getElementById("twitter_text").value),
            null,
            // "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,left=" + left + ",top=" + top
            );
    } else {
        ;
    }
}

number(1);
function number(x) {
	var num = x;
	console.log(num);
}


record_button.addEventListener('click', record_post);
