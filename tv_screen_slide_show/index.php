<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>
  #myTv{
        height: 290px;
        width: 360px;
        background: #000;
       padding-top: 20px;
  }
  #myScreen{
    height: 270px;
    margin-left: 12px;
    width: 336px;
    background: #fff;
  }

  </style>
  <script>
  var imgArray=['allauddin.jpg','4222.jpg'];
  var i=0;
  function loop()
  {
    if(i>imgArray.length-1)
    {
      i=0;
    }
    document.getElementById('myScreen').innerHTML='<img src="imgs/'+imgArray[i]+'" >'; //there is some task left to complete the effect , because  the image is not showing perfrctly
    i++;
    setTimeout('loop()',3000);
  }
  window.onload=loop;
  </script>
</head> 
<body>
  <div id="myTv"><div id="myScreen"></div></div>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
</html>

