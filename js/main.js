(function($){
  'use strict';

  var cv = document.getElementById('cvHead'),
    ctx = cv.getContext('2d'),
    cvb = document.getElementById('cvBox'),
    ctb = cvb.getContext('2d'),
    line = document.getElementById('lineText'),
    W,
    Wb,
    H,
    Hb,
    dataURL,
    inLine = document.getElementById('inputLine'),
    textArea = document.getElementById('lineTextArea'),
    lineArray = [];

  $(document).ready(function(){
        var imageFile = new Image();
        imageFile.src = "img/talentB.jpg";
        imageFile.onload = function(){
          Wb = cvb.width = imageFile.width;
          Hb = cvb.height = imageFile.height;
          ctb.clearRect(0, 0, Wb, Hb);
          ctb.drawImage(imageFile, 0, 0);
        };

        textArea.value = "";
        $('#btnLineSet').click(function(){
          lineArray.push(inLine.value);
          //alert(lineArray);
          if(textArea.value){
            textArea.value = textArea.value+"\n"+inLine.value;
          }else{
            textArea.value = inLine.value;
          }
          inLine.value = "";
        });
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
    $('#cvBox').on('mousedown', clicked);
    $('#cvBox').on('mouseup', released);
    $('#cvBox').on('touchstart', clicked);
    $('#cvBox').on('touchend', released);
    $('#cvHead').on('mousedown', clicked);
    $('#cvHead').on('mouseup', released);
    $('#cvHead').on('touchstart', clicked);
    $('#cvHead').on('touchend', released);
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
      setTimeout(function(){line.innerHTML='\xa0'},1500);
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
