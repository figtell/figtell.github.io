(function($){
  'use strict';

  var cv = document.getElementById('cvHead'),
    ctx = cv.getContext('2d'),
    cvb = document.getElementById('cvBox'),
    ctb = cvb.getContext('2d'),
    W,
    Wb,
    H,
    Hb,
    dataURL;

  $(document).ready(function(){
        var imageFile = new Image();
        imageFile.src = "img/talent.jpg";
        Wb = cvb.width = imageFile.width;
        Hb = cvb.height = imageFile.height;
        imageFile.onload = function(){
          ctb.clearRect(0, 0, Wb, Hb);
          ctb.drawImage(imageFile, 0, 0);
        };
        init();
    });

  function drawFile(){
    var imageFile = new Image();

    if(dataURL){
      imageFile.src = dataURL;
      W = cv.width = imageFile.width;
      H = cv.height = imageFile.height;
      imageFile.onload = function(){
        ctx.clearRect(0, 0, W, H);
        ctx.drawImage(imageFile, 0, 0);
      };
    }
  }

  function init(){
    $('#upimg').on('change', upload);
    $('#cvBox').on('mousedown', clicked);
    $('#cvBox').on('mouseup', released);
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
    ctb.clearRect(0, 0, Wb, Hb);
  }
  function released(){
    var imageFile = new Image();
    imageFile.src = "img/talent.jpg";
    Wb = cvb.width = imageFile.width;
    Hb = cvb.height = imageFile.height;
    imageFile.onload = function(){
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
