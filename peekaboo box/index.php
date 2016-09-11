<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  function yScrollHeader()
  { 
    var peekaboo=document.getElementById('peekaboo'); 
    if((window.pageYOffset+window.innerHeight)>=document.body.offsetHeight)
    {
        peekaboo.style.transition='right 0.7s ease-in-out 0s';
        peekaboo.style.right='0px';
    }
    else
    {
       peekaboo.style.transition='right 0.7s ease-in-out 0s';
        peekaboo.style.right='-452px';
    }
  }
  window.addEventListener('scroll',yScrollHeader,false);
     // window.onscroll=yScrollHeader;
  </script>
</head> 
<body>
  <div id="div1" style="height:1600px;font-size:30px;">
    this portion contains all about the div1
  </div>
  <div id="peekaboo">Peekaboo!</div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
</html>
