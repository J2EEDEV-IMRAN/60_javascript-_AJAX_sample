<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>
    #overlay{
      background: #000;
      opacity: 0.8;
      width: 100%;
      height: 100%;
      z-index: 2;
      top: 0;
      left: 0;
      position: fixed;
      display: none;
    }
    #lightswithch
    {
     background: url(imgs/light-switch-off.jpg) no-repeat;
     cursor: pointer;
     position: relative;
     z-index: 3;
     height: 60px;
     width: 40px;
    }
    #special{
      position: relative;
      z-index: 4;
    }
  </style>
  <script>
 function toggleTheatermode()
 {
  var overlay=document.getElementById('overlay');
  var lightswithch=document.getElementById('lightswithch');
  if(overlay.style.display=='block')
  {
    overlay.style.display='none';
    lightswithch.src='imgs/light-switch-off.jpg';
    lightswithch.title='Enter theater mode';
  }
  else
  {
    overlay.style.display='block';
    lightswithch.src='imgs/light-switch-on.jpg';
    lightswithch.title='Enter theater mode';
  }

 }
  </script>
</head> 
<body>
    <div id="overlay"></div>
    <h1>Web page theater mode example</h1>
    <img id="lightswithch" onclick="toggleTheatermode()" src="imgs/light-switch-off.jpg" title="Enter theater mode"/><div style="display:inline;"> I can put a titele here if I want </div>
    <div id="special">
      <!--<iframe width="560" height="315" src="http://www.facebook.com" allowfullscreen ></iframe>-->
      <img width="560" height="315"  src="imgs/allauddin.jpg">
    </div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>

