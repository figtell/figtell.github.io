var cv = document.getElementById('cvHead'),
ctx = cv.getContext('2d'),
W,
H,
dataURI;

function drawFile(){
  var imageFile = new Image();
  if(dataURI){
    imageFile.src = dataURI;
    W = cv.width = imageFile.width;
    H = cv.height = imageFile.height;
    imageFile.onload = function(){
      ctx.clearRect(0, 0, W, H);
      ctx.drawImage(imageFile, 0, 0);
    };
  }
}

function init(){
  $('#upload').on('change', upload);
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

    reader.readAsDataURI(file);
    reader.onload = function(e){
      dataURI = e.target.result;
      drawFile();
    };
  }
}
