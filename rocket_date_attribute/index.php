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
   .rocket
   {
     position: absolute;
     left: 0;
     transition:left 0s linear 0s;
     height: 100px;
     width: 100px;
   }
   .rocket[data-altitude='100']
   {
       transform:rotate(90deg);
   }
  </style>
  <script>
      var altitude,speed,distance;
      function activateRocket()
      {
        var rocket=document.querySelectorAll('div.rocket');
        for(var i=0;i<rocket.length;i++)
        {
          altitude=rocket[i].dataset.altitude;
          speed=rocket[i].dataset.speed;
          distance=rocket[i].dataset.rocketDistance;
          rocket[i].style.top=altitude+'px';
           rocket[i].style.transitionDuration=speed+'s';
            rocket[i].style.left=distance+'px';
        }
      }
      window.addEventListener('load',activateRocket,false);
  </script>
</head> 
<body>
       <div class="rocket" data-altitude="100" data-speed="3.5" data-rocket-distance="700" >Hello every one</div>
       <div class="rocket" data-altitude="200" data-speed="7.0" data-rocket-distance="800" >How are you</div>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
