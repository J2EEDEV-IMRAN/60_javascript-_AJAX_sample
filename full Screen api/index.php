
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
function toggleScreen(elem)
{
    if(elem.requestFullScreen)
    {
         elem.requestFullScreen();
    }
    else if(elem.webkitRequestFullScreen)
    {
         elem.webkitRequestFullScreen();
    }
    else if(elem.mozRequestFullScreen)
    {
      elem.mozRequestFullScreen();
    }
    else if(elem.msRequestFullScreen)
    {
       elem.msRequestFullScreen();
    }
   
}
  </script>
</head> 
<body>
  <div id="wrap">
    <h3>Fullscreen Desktop Application</h3>
    <h2>My webpage with fullscreen desktop application</h2>
    <img src="imgs/allauddin.jpg" id="imgs" onclick="toggleScreen(this)" >
    
  </div>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>
<!--          one way of showing image with fullscreen after this example another example below shows the full screen desktop application for whole window
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  var db,isfullscreen=false;
function toggleScreen()
{
  db=document.getElementById('imgs');
  if(isfullscreen==false)
  {
    if(db.requestFullScreen)
    {
         db.requestFullScreen();
    }
    else if(db.webkitRequestFullScreen)
    {
    db.webkitRequestFullScreen();
    }
    else if(db.mozRequestFullScreen)
    {
      db.mozRequestFullScreen();
    }
    else if(db.msRequestFullScreen)
    {
       db.msRequestFullScreen();
    }
       isfullscreen=true;
       wrap.style.width=window.screen.width+'px';
       wrap.style.height=window.screen.height+'px';
  }
  else
  {
    if(document.cancleFullScreen)
    {
         document.cancelFullScreen();
    }
    else if(document.webkitExitFullScreen)
    {
    document.webkitExitFullScreen();
    }
    else if(document.mozCancleFullScreen)
    {
      document.mozCancleFullScreen();
    }
    else if(document.msExiteFullScreen)
    {
       document.msExitFullScreen();
    }
       isfullscreen=false;
       wrap.style.width='100%';
       wrap.style.height='auto';
  }
   
}
  </script>
</head> 
<body>
  <div id="wrap">
    <h3>Fullscreen Desktop Application</h3>
    <h2>My webpage with fullscreen desktop application</h2>
    <img src="imgs/allauddin.jpg" id="imgs">
    <button onclick="toggleScreen()">Full Screen</buttton>
  </div>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>-->

<!--     // for whole body we can write this syntex
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  var db,isfullscreen=false;
function toggleScreen()
{
  db=document.body;
  if(isfullscreen==false)
  {
    if(db.requestFullScreen)
    {
         db.requestFullScreen();
    }
    else if(db.webkitRequestFullScreen)
    {
    db.webkitRequestFullScreen();
    }
    else if(db.mozRequestFullScreen)
    {
      db.mozRequestFullScreen();
    }
    else if(db.msRequestFullScreen)
    {
       db.msRequestFullScreen();
    }
       isfullscreen=true;
       wrap.style.width=window.screen.width+'px';
       wrap.style.height=window.screen.height+'px';
  }
  else
  {
    if(document.cancleFullScreen)
    {
         document.cancelFullScreen();
    }
    else if(document.webkitExitFullScreen)
    {
    document.webkitExitFullScreen();
    }
    else if(document.mozCancleFullScreen)
    {
      document.mozCancleFullScreen();
    }
    else if(document.msExiteFullScreen)
    {
       document.msExitFullScreen();
    }
       isfullscreen=false;
       wrap.style.width='100%';
       wrap.style.height='auto';
  }
   
}
  </script>
</head> 
<body>
  <div id="wrap">
    <h3>Fullscreen Desktop Application</h3>
    <h2>My webpage with fullscreen desktop application</h2>
    <button onclick="toggleScreen()">Full Screen</buttton>
  </div>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>-->



