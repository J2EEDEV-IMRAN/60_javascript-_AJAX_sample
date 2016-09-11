<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>

  </script>
</head> 
<body>
  <div id="image"></div>
  <button id="start">start</button>
   <button id="stop">stop</button>
  <script>
  start.addEventListener('click',function(){
     image.style.animation= 'ball-bounce 0.7s steps(6) infinite';
  });
stop.addEventListener("click", function(){
  ball.style.animation = "";
  ball.style.webkitAnimation = "";
});
  </script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
</html>
<!--  image.addEventListener('click',function(){
     image.style.animation= 'ball-bounce 0.7s steps(6) infinite';
  });-->
