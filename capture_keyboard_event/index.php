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


  </style>
  <script>
  window.onkeydown=function(event)
  {
      var key=String.fromCharCode(event.keyCode);
      var code=event.keyCode;
      document.getElementById('kp').innerHTML=key;//aivabe dawa jae abar nicher moto o dawa aje
      kc.innerHTML=code;                        //aivabe dawa jae abar uporer moto o dawa aje
      status.innerHTML=' Down event fired for :'+key;
        if(key=='A')
  {
    alert('Put script to run specific for A key here'); // ekhane alert er poriborte A key press korle ki hobe ta spacifi kortepari jmn shortcut key te hoy
  }
   else if(key=='S')
  {
    alert('Put script to run specific for S key here'); // ekhane alert er poriborte A key press korle ki hobe ta spacifi kortepari jmn shortcut key te hoy
  }
   else if(key=='W')
  {
    alert('Put script to run specific for W key here'); // ekhane alert er poriborte A key press korle ki hobe ta spacifi kortepari jmn shortcut key te hoy
  }
   else if(key=='D')
  {
    alert('Put script to run specific for D key here'); // ekhane alert er poriborte A key press korle ki hobe ta spacifi kortepari jmn shortcut key te hoy
  }
  }
    window.onkeyup=function(event)
  {
      var key=String.fromCharCode(event.keyCode);
      kp.innerHTML=key;
      document.getElementById('status').innerHTML=' Up event fired for :'+key;
  }



  </script>
</head> 
<body>
  <h2>Javascript Capture Keyboard Input Example</h2>
  <h3>Onkeyup-Onkeydown</h3>
  Key pressed:<span id="kp"></span><br/>
  Key code   :<span id="kc"></span>
  <p id="status">Keyboard event status</p>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
