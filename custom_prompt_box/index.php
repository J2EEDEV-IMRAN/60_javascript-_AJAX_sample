
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
<script>
    function changeText(value)
    {
      
   document.getElementById('status').innerHTML=value;
    }
      function doStuff(value)
    {
      
   document.body.style.background=value;
    }

   function customAlert()
   {
    this.render=function(dialog,func)
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
      document.getElementById('dialogheader').innerHTML='A value is required';
       document.getElementById('dialogbody').innerHTML=dialog;
            document.getElementById('dialogbody').innerHTML+='<br/><input id="prompt_value">';  //N.B.: you can use here <textarea id="prompt_value"></textarea>
        document.getElementById('dialogfooter').innerHTML='<button onclick="Alert.yes(\''+func+'\')">YES</button>&nbsp;<button onclick="Alert.cancle()">CANCLE</button>';
    }
    this.cancle=function(){
       document.getElementById('dialogoverlay').style.display='none';
       document.getElementById('dialogbox').style.display='none';
    }
    this.yes=function(func)
    {
      var prompt_value=document.getElementById('prompt_value').value;
      window[func](prompt_value);
      
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
    <div id="dialogfooter"></div> 
  </div>
 <h1 id="status"></h1>
    <button onclick="Alert.render('Type some text','changeText');">change text</button>

    <button onclick="Alert.render('Set the color','doStuff');">do stuff</button>
 
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="jquery-ui.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>





