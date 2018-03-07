(function($){
  'use strict';

  var cv = document.getElementById('cvHead'),
    ctx = cv.getContext('2d'),
    cvb = document.getElementById('cvBox'),
    ctb = cvb.getContext('2d'),
    cvk = document.getElementById('cvBack'),
    ctk = cvk.getContext('2d'),
    W,
    Wb,
    H,
    Hb,
    dataURL;

  $(window).load(function(){
        var imageFilew = new Image();
        imageFilew.src = "img/talent.jpg";
        Wb = cvb.width = cvk.width = imageFilew.width;
        Hb = cvb.height = cvk.height = imageFilew.height;
        imageFilew.onload = function(){
          ctb.clearRect(0, 0, Wb, Hb);
          ctb.drawImage(imageFilew, 0, 0);
        };
        init();
    });

  function drawFile(){
    var imageFiled = new Image();

    if(dataURL){
      imageFiled.src = dataURL;
      W = cv.width = imageFiled.width;
      H = cv.height = imageFiled.height;
      imageFiled.onload = function(){
        ctx.clearRect(0, 0, W, H);
        ctx.drawImage(imageFiled, 0, 0);
      };
    }
  }

  function init(){
    $('#upimg').on('change', upload);
    $('#cvBox').on('mousedown', clicked);
    $('#cvBox').on('mouseup', released);
  }

  function clicked(){
    var imageFilec = new Image();
    imageFilec.src = "img/talentB.jpg";
    Wb = cvb.width = imageFilec.width;
    Hb = cvb.height = imageFilec.height;
    imageFilec.onload = function(){
      ctb.clearRect(0, 0, Wb, Hb);
      ctb.drawImage(imageFilec, 0, 0);
    };
  }
  function released(){
    var imageFiler = new Image();
    imageFiler.src = "img/talent.jpg";
    Wb = cvb.width = imageFiler.width;
    Hb = cvb.height = imageFiler.height;
    imageFiler.onload = function(){
      ctb.clearRect(0, 0, Wb, Hb);
      ctb.drawImage(imageFiler, 0, 0);
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
