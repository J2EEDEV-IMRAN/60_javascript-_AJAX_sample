
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  function _(x)
  {
    return document.getElementById(x);
  }
  function initMenue()
  {
      _('btn_marker').style.width=_('btn1').offsetWidth-2+'px';
      _('btn_marker').style.left=_('btn1').offsetLeft+'px';
      _('btn_marker').style.display='block';
  }
  function loadContants(btn)
  {
         _('btn_marker').style.width=btn.offsetWidth-2+'px';
      _('btn_marker').style.left=btn.offsetLeft+'px';
      _('mycontent').innerHTML='Content of '+btn.innerHTML+' loaded';
  }

     window.addEventListener('load',function(event){initMenue();});
  </script>
</head> 
<body>
<h1>Animated button marker system</h1>
<div id="mymenue">
  <div id="btn_marker"></div>
<button id="btn1" onclick="loadContants(this)">HTML</button>
<button id="btn2" onclick="loadContants(this)">JavaScript</button>
<button id="btn3" onclick="loadContants(this)">CSS</button>
<button id="btn4" onclick="loadContants(this)">PHP</button>
</div>
<div id="mycontent">Content for HTML5</div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>


