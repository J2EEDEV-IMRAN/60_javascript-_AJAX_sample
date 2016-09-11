<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>
   .contentbox{
    background: #1C9EFF;
    padding: 12px;
    height: 100px;
    width: 300px;
   }
  </style>
  <script>
  var fade_in_form=0;
  var fade_out_form=10;
 function fadeIn(elem)
 {
   var contentbox= document.getElementById(elem);
   contentbox.style.display='block';
   var newsetting=fade_in_form/10;   //here opacity is increasing by 0 to 1 with fractio value 0.1 0.2 0.3 0.4 etc.
   contentbox.style.opacity=newsetting;
   fade_in_form++;
   if(fade_in_form==10)
   {
    contentbox.style.opacity=1;
    clearTimeout(loopTimer);
    fade_in_form=0;
    return false;
   }
   var loopTimer=setTimeout('fadeIn(\''+elem+'\')',50);

 }
 function fadeOut(elem)
 {
   var contentbox= document.getElementById(elem);
   var newsetting=fade_out_form/10;   //here opacity is decreasing by 0 to 1 with fractio value 0.1 0.2 0.3 0.4 etc.
   contentbox.style.opacity=newsetting;
   fade_out_form--;
   if(fade_out_form==0)
   {
    contentbox.style.opacity=0;
    //contentbox.style.display='none'; by  comment out this line you can check the effect its interesting
    clearTimeout(loopTimer);
    fade_out_form=10;
    return false;
   }
   var loopTimer=setTimeout('fadeOut(\''+elem+'\')',50);
 }
  </script>
</head> 
<body>
    <button onclick="fadeIn('div1')">Fade In</button>
    <button onclick="fadeOut('div1')">Fade Out</button>
    <div id="div1" class='contentbox'></div>
     <button onclick="fadeIn('div2')">Fade In</button>
    <button onclick="fadeOut('div2')">Fade Out</button>
    <div id="div2" class='contentbox'></div>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
</html>

