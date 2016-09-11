
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
<script>
   function customAlert()
   {
    this.render=function(dialog)
    {
      var winW=window.innerWidth;
      var winH=window.innerHeight;
      var dialogoverlay=document.getElementById('dialogoverlay');
      var dialogbox=document.getElementById('dialogbox');
      dialogoverlay.style.display='block';
      dialogoverlay.style.height=winH+'px';
      dialogbox.style.left=(winW/2)-(550/2)+'px';
      dialogbox.style.top='100px';
      dialogbox.style.display='block';
      document.getElementById('dialogheader').innerHTML='Acknowledge this message';
       document.getElementById('dialogbody').innerHTML=dialog;
        document.getElementById('dialogfooter').innerHTML='<button onclick="Alert.ok()">OK</button>';


    }
    this.ok=function(){
       document.getElementById('dialogoverlay').style.display='none';
       document.getElementById('dialogbox').style.display='none';
    }
   }
   var Alert=new customAlert();

</script>
</head> 
<body>
  <div id="dialogoverlay"></div>
  <div id="dialogbox">
    <div id="dialogheader"></div>
    <div id="dialogbody"></div>
    <div id="dialogfooter"></div> <!--www.developphp er example er css file e bul hoeche ja ei example er css e solve dawa ache-->
  </div>
  </div>
    <button onclick="Alert.render('Everything is ok');">custom_alert</button>
    <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="jquery-ui.js"></script>
     <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>





