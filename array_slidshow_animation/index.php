
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  var elem=0;
  var elemArray=['not bad','<u>good_boy</u>','happy','perfect_guy','<strong>bad_boy<strong>'];
  var wss;
  function wssNext()
  {
          elem++;
          wss.style.opacity=0;
          if (elem>elemArray.length-1) {elem=0;}
          setTimeout('wssSlide()',1000);
  }
  function wssSlide()
  {
      wss.innerHTML=elemArray[elem];
      wss.style.opacity=1;
      setTimeout('wssNext()',2000);
  }
  </script>
</head> 
<body>
  

  <h3>Asif is my roommate what I can say about him is <span id="wss"></span></h3>
<script>var wss=document.getElementById('wss'); wssSlide();</script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 

</body>
</html>