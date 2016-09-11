<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>
  body
  {
    top: 0;
    left:0; 
  }
  #playpausebtn:hover{
    opacity: 1.0;
  }
  #playpausebtn
  {
    background: url(imgs/play.png) no-repeat;
    border: none;
    width: 34px;
    height: 20px;
    cursor: pointer;
  }
  #video_player_box{
    background: #000;
    width: 550px;
    margin: 0 auto;
  }
  #video_control_var
  {
    background: #333;
    padding: 10px;
    color: #ccc;
    top:0;
    display: block;
  }
  #seekslider{
    width: 180px;
  }
  #volumeslider{
    width: 80px;
  }
  input[type='range']
  {
   -webkit-appearance:none !important;
   background: #000;
   border: #666 1px solid;
   height: 4px;

  }
  input[type='range']::-webkit-slider-thumb
  {
    -webkit-appearance:none !important;
    background: #FFF;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    cursor: pointer;
  }

  </style>
  <script>
  var vid,playbtn,seekslider,curtimetext,durtimetext;
  function _(x)
  {
    return document.getElementById(x);
  }
  function initilizedPlayer()
  {
      vid=_('my_video');
      playbtn=_('playpausebtn');
      seekslider=_('seekslider');
      curtimetext=_('curtimetext');
      durtimetext=_('durtimetext');
      mute=_('vidmut');
      volumeslider=_('volumeslider');
     

      playbtn.addEventListener('click',playpause,false);
      seekslider.addEventListener('change',vidseek,false);
      vid.addEventListener('timeupdate',seektimeupdate,false);
      mute.addEventListener('click',vidmut,false);
      volumeslider.addEventListener('change',volumeseek,false);
      
  }
 window.onload=initilizedPlayer;
  function playpause()
  {
    if(vid.paused)
    {
      vid.play();
      playbtn.style.background='url(imgs/pause.png)';
    }
    else
    {
      vid.pause();
      playbtn.style.background='url(imgs/play.png)';
    }
  }
  function vidseek()
  {
    var seek=vid.duration*(seekslider.value/100);
    vid.currentTime=seek;
  }
  function seektimeupdate()
  {
    var nt=vid.currentTime*(100/vid.duration);
    seekslider.value=nt;
    var curmins=Math.floor(vid.currentTime / 60);
    var cursecs=Math.floor(vid.currentTime-curmins*60);
    var durmins=Math.floor(vid.duration/60);
    var dursecs=Math.floor(vid.duration-durmins*60);
    if( cursecs<10){cursecs='0'+cursecs;}
    if(dursecs<10){dursecs='0'+dursecs;}
    if(curmins<10){curmins='0'+curmins;}
    if (durmins<10) {durmins='0'+durmins;}
    curtimetext.innerHTML=curmins+':'+cursecs;
    durtimetext.innerHTML=durmins+':'+dursecs;
  }
  
  function vidmut()
  {
    if(vid.muted)
    {
      vid.muted=false;
      mute.innerHTML='Mute'
    }
    else{
      vid.muted=true;
      mute.innerHTML='Unmute';
    }
  }
  function volumeseek()
  {
    vid.volume=volumeslider.value/100;
  }
function toggleScreen()
{
    if(vid.requestFullScreen)
    {
         vid.requestFullScreen();
    }
    else if(vid.webkitRequestFullScreen)
    {
         vid.webkitRequestFullScreen();
    }
    else if(vid.mozRequestFullScreen)
    {
      vid.mozRequestFullScreen();
    }
    else if(vid.msRequestFullScreen)
    {
       vid.msRequestFullScreen();
    }
   
}

  </script>
</head> 
<body>
  <div id="video_player_box">
     <video id="my_video"  width="550" height="320">
        <source src="video/Devdas Hote Chai (Drama).mkv-.mp4">
     </video>

     <div id="video_control_var">
        <button id="playpausebtn" ></button>
        <input  id="seekslider" type="range" min="0" max="100" value="0" step="1" style="width:180px;">
        <span id="curtimetext">00:00</span>/<span id="durtimetext">00:00</span>
        <button id="vidmut">mute</button>
        <input type="range" id="volumeslider" value="100" min="0" max="100" step="1" style="width:80px;">
        <button id="fullscreenbtn" onclick="toggleScreen()">[&nbsp;]</button>
     </div>
</div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
