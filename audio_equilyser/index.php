
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
   var audio=new Audio();
   audio.src='(Dhakawap.com)_bhoot-fm-28-08-2015.mp3';
   audio.controls=true;
   audio.loop=true;
   audio.autoplay=false;
   var canvas,ctx,source,contex,analyser,fbc_array,bars,bar_x,bar_width,bar_height;
   window.addEventListener('load',initMp3player,false);
   function initMp3player(){
    document.getElementById('audio_box').appendChild(audio);
    contex=new webkitAudioContext();         //aikhan thake problem ache internet thake solve korte  hobe (new javascript HTML5 audion API)
    analyser=contex.crateAnalyser();
    canvas=document.getElementById('audio_analizer');
    ctx=canvas.getContext('2d');
    source=contex.createMediaElementSource(audio);
    source.connect(analyser);
    analyser.connect(contex.destination);
    frameLooper();
   }
   function frameLooper()
   {
    window.webkitRequestAnimationFrame(frameLooper);
    fbc_array=new  Uint8Array(analyser.frequencyBinCount);
    analyser.getByteFrequencyData(fbc_array);
    ctx.clerReact(0,0,canvas.width,canvas.height);
    ctx.fillStyle='#00CCFF';
    bars=100;
    for(var i=0;i<bars;i++)
    {
      bar_x=i*3;
      bar_width=2;
      bar_height=-(fbc_array[i]/2);
      ctx.fillRect(bar_x,canvas.height,bar_width,bar_height);
    }
   }
  </script>
</head> 
<body>
  

  <div id="mp3_player">
   <div id="audio_box"></div>
   <canvas id="audio_analizer"></canvas>
  </div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 

</body>
</html>