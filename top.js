"use strict";
$(function () {
    $('#openModal').click(function(){
        $('#modalArea').fadeIn();
    });
    $('#closeModal , #modalBg').click(function(){
      $('#modalArea').fadeOut();
    });
  });

const record = document.getElementById('modal_record');
