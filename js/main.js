(function($){
  'use strict';

  var cv = document.getElementById('cvHead'),
    ctx = cv.getContext('2d'),
    cvb = document.getElementById('cvBox'),
    ctb = cvb.getContext('2d'),
    cvt = document.getElementById('cvTop'),
    ctt = cvt.getContext('2d'),
    line = document.getElementById('lineText'),
    W,
    Wb,
    H,
    Hb,
    dataURL,
    inLine = document.getElementById('inputLine'),
    textArea = document.getElementById('lineTextArea'),
    lineArray = [],
    timer = null;

  $('#btnLineSet').click(function(){
    lineArray.push(inLine.value);
    //alert(lineArray);
    if(textArea.value){
      textArea.value = textArea.value+"\n"+inLine.value;
    }else{
      textArea.value = inLine.value;
    }
    inLine.value = "";
    inLine.focus();
  });

  $('#inputLine').keyup(function(event){
    if(event.keyCode === 13){
      $('#btnLineSet').click();
    }
  });

  $('#btnSet').click(function(){
    document.getElementById('nameText').innerHTML=document.getElementById('inputName').value;
    document.getElementById('form').style.display = "block";
    document.getElementById('inpForm').style.display = "block";
    inLine.focus();
  });

  $('#inputPlace').keyup(function(event){
    if(event.keyCode === 13){
      $('#btnSet').click();
    }
  });

  $(document).ready(function(){
        var imageFile = new Image();
        imageFile.src = "img/talentB.jpg";
        imageFile.onload = function(){
          Wb = cvt.width = cvb.width = imageFile.width;
          Hb = cvt.height = cvb.height = imageFile.height;
          ctb.clearRect(0, 0, Wb, Hb);
          ctt.clearRect(0, 0, Wb, Hb);
          ctb.drawImage(imageFile, 0, 0);
        };

        textArea.value = "";
        init();
    });

  function drawFile(){
    var imageFile = new Image();

    if(dataURL){
      //W = cv.width = imageFile.width*1.3;
      //H = cv.height = imageFile.height*1.3;
      imageFile.onload = function(){
        ctx.clearRect(0, 0, cv.width, cv.height);
        ctx.drawImage(imageFile, 0, 0, cv.width, cv.height);
      };
      imageFile.src = dataURL;
    }
  }

  function init(){
    $('#upimg').on('change', upload);
    /*$('#cvBox').on('mousedown', clicked);
    $('#cvBox').on('mouseup', released);
    $('#cvBox').on('touchstart', clicked);
    $('#cvBox').on('touchend', released);
    $('#cvHead').on('mousedown', clicked);
    $('#cvHead').on('mouseup', released);
    $('#cvHead').on('touchstart', clicked);
    $('#cvHead').on('touchend', released);*/
    $('#cvTop').on('mousedown', clicked);
    $('#cvTop').on('mouseup', released);
    $('#cvTop').on('touchstart', clicked);
    $('#cvTop').on('touchend', released);
  }

  function clicked(){
    /*var imageFile = new Image();
    imageFile.src = "img/talentB.jpg";
    Wb = cvb.width = imageFile.width;
    Hb = cvb.height = imageFile.height;
    imageFile.onload = function(){
      ctb.clearRect(0, 0, Wb, Hb);
      //ctb.drawImage(imageFile, 0, 0);
    };*/
    if(lineArray.length > 0){
      ctb.clearRect(0, 0, Wb, Hb);
      //cvb.style.display="none";
      //line.innerHTML=lineArray;
      //alert(lineArray.length);
      var cnt = Math.floor(Math.random()*lineArray.length);
      //alert(cnt);
      line.innerHTML=lineArray[cnt];
      if(timer){
        clearTimeout(timer);
        timer = null;
      }
      timer = setTimeout(function(){line.innerHTML='\xa0'},1500);
    }
  }
  function released(){
    //cvb.style.display="block";
    var imageFile = new Image();
    imageFile.src = "img/talentB.jpg";
    imageFile.onload = function(){
      Wb = cvb.width = imageFile.width;
      Hb = cvb.height = imageFile.height;
      ctb.clearRect(0, 0, Wb, Hb);
      ctb.drawImage(imageFile, 0, 0);
    };
  }

  function upload(){
    if(window.File){
      var reader = new FileReader(),
        file = this.files[0];
          if(!this.files.length){
            return;
          }
          if(!file.type.match(/image\/\w+/)){
            alert('Please choose image');
            return;
          }

      reader.readAsDataURL(file);
      reader.onload = function(e){
        dataURL = e.target.result;
        drawFile();
      };
    }
  }

  /*function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imgInp").change(function() {
    readURL(this);
  });*/
})(jQuery);
