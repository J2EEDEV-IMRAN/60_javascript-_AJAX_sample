
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
   var looper,degrees=0;
   function rotateAnimation(el,speed)
   {
        var elem=document.getElementById(el);
        elem.style.transform='rotate('+degrees+'deg)';
        looper=setTimeout('rotateAnimation(\''+el+'\','+speed+')',speed);
        degrees++;
        if(degrees>359)
        {
          degrees=1;
        }
        document.getElementById('status').innerHTML='rotate('+degrees+')';
   }
  </script>
</head> 
<body>
<img src="imgs/allauddin.jpg" id="img1">
<h2 id="status"></h2>
<script>rotateAnimation('img1',20)</script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>

