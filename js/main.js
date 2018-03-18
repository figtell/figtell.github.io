var figName = "",
  playName = "";

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
    imgfront = document.getElementById('img2').value,
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
    figName = document.getElementById('inputName').value + "_";
    playName = document.getElementById('inputPlace').value + "_";
    inLine.focus();
  });

  $('#inputPlace').keyup(function(event){
    if(event.keyCode === 13){
      $('#btnSet').click();
    }
  });

  $(document).ready(function(){
    if(($(window).height()/2.2)<($(window).width()/2)){
      Wb = Hb = $(window).height()/2.2;
    }else{
      Wb = Hb = $(window).width()/2;
    }
    line.innerHTML='\xa0';

    $('#cvBack').width(Wb);
    $('#cvBack').height(Hb);
    $('#placeholder').width(Wb);
    $('#placeholder').height(Hb);
    var imageFile = new Image();
    imageFile.src = imgfront;
    imageFile.onload = function(){
      //Wb = cvt.width = cvb.width = imageFile.width;
      cvt.width = cvb.width = Wb;
      //Hb = cvt.height = cvb.height = imageFile.height;
      cvt.height = cvb.height = Hb;
      ctb.clearRect(0, 0, Wb, Hb);
      ctt.clearRect(0, 0, Wb, Hb);
      ctb.drawImage(imageFile, 0, 0, Wb, Hb);
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
    $('#cvTop').on('mousedown touchstart', clicked);
    $('#cvTop').on('mouseup touchend', released);
  }

  function clicked(e){
    e.preventDefault();
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
  function released(e){
    e.preventDefault();
    //cvb.style.display="block";
    var imageFile = new Image();
    imageFile.src = imgfront;
    imageFile.onload = function(){
      //Wb = cvb.width = imageFile.width;
      cvb.width = Wb;
      //Hb = cvb.height = imageFile.height;
      cvb.height = Hb;
      ctb.clearRect(0, 0, Wb, Hb);
      ctb.drawImage(imageFile, 0, 0, Wb, Hb);
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

  // ftp token 754820d9-8892-408b-9ea2-30d4fbe658c8

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

// Script from http://ftp.apixml.net/
// Copyright 2017 http://ftp.apixml.net/, DO NOT REMOVE THIS COPYRIGHT NOTICE
var Ftp = {
    createCORSRequest: function (method, url) {
        var xhr = new XMLHttpRequest();
        if ("withCredentials" in xhr) {
            // Check if the XMLHttpRequest object has a "withCredentials" property.
            // "withCredentials" only exists on XMLHTTPRequest2 objects.
            xhr.open(method, url, true);
        } else if (typeof XDomainRequest != "undefined") {
            // Otherwise, check if XDomainRequest.
            // XDomainRequest only exists in IE, and is IE's way of making CORS requests.
            xhr = new XDomainRequest();
            xhr.open(method, url);
        } else {
            // Otherwise, CORS is not supported by the browser.
            xhr = null;
        }
        return xhr;
    },
    upload: function(token, files) {
        var file = files[0];
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.addEventListener("load",
            function() {
                var base64 = this.result;
                var xhr = Ftp.createCORSRequest('POST', "http://ftp.apixml.net/upload.aspx");
                if (!xhr) {
                    throw new Error('CORS not supported');
                }
				xhr.onreadystatechange = function() {
					if (xhr.readyState == 4 && xhr.status == 200) {
						Ftp.callback(file);
					}
				};
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send("token=" + token + "&data=" + encodeURIComponent(base64) + "&file="+ playName + figName + file.name);
            },
            false);
    },
	callback: function(){}
};
