<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>

  </style>
  <script>
 function layoutHendler()
 {
   var pagestyle=document.getElementById('pagestyle');
   if(window.innerWidth<900)
   {
    pagestyle.setAttribute('href','css/mobile.css');
   }
   else if(window.innerWidth<1200)
   {
     pagestyle.setAttribute('href','css/medium.css');
   }
   else
   {
    pagestyle.setAttribute('href','css/style.css');
   }
 }
  var menuItem=['dropmenu1','dropmenu2','dropmenu3'];
  var fade_out_from=10;
  var fade_in_from=0;
  function fadeIn(x){
    var fi=document.getElementById(x);
    var opacityFI=fade_in_from/10;
    fi.style.opacity=opacityFI;
    fi.style.display='block';
    if(opacityFI==1)
    {
      fi.style.opacity=1;
      fade_in_from=0;
      clearTimeout(time);
      return false;
    }
    fade_in_from++;
    var time=setTimeout('fadeIn(\''+x+'\')',20);
  }
  function fadeOut(x)
  {
    var fi=document.getElementById(x);
    var opacityFI=fade_out_from/10;
    fi.style.opacity=opacityFI;
    
    if(fade_out_from==0)
    {
      fi.style.opacity=0;
      fi.style.display='none';
      fade_out_from=10;
      clearTimeout(time);
      return false;
    }
    fade_out_from--;
    var time=setTimeout('fadeIn(\''+x+'\')',20);

  }
function dropMenu(x)
{
  for(var o in menuItem)
  {
    if(menuItem[o]!=x)
    {
          document.getElementById(menuItem[o]).style.display='none';
    }
  }


  if (document.getElementById(x).style.display=='block')
   {
   fadeOut(x);
   }
   else
   {
    fadeIn(x);
   }

}
layoutHendler();
window.onresize=layoutHendler;
  </script>
</head> 

<body>
  <!--Header start-->
   <div id="header">
    <div id="logo">Our company</div>
    <div id="headermenusystem">
      <div id="cont1">
        <a href="#" onclick="return false" onmousedown="dropMenu('dropmenu1')">Service</a>
        <div id="dropmenu1" class="dropmenu">
         <a href="#">Imran1</a>
         <a href="#">Imran2</a>
         <a href="#">Imran3</a>
        </div>
      </div>
         <div id="cont2" >
        <a href="#" onclick="return false" onmousedown="dropMenu('dropmenu2')">Location</a>
        <div id="dropmenu2" class="dropmenu">
         <a href="#">Imran1</a>
         <a href="#">Imran2</a>
         <a href="#">Imran3</a>
        </div>
      </div>
        <div id="cont3" >
        <a href="#" onclick="return false" onmousedown="dropMenu('dropmenu3')">Stuff</a>
        <div id="dropmenu3"class="dropmenu">
         <a href="#">Imran1</a>
         <a href="#">Imran2</a>
         <a href="#">Imran3</a>
        </div>
      </div>
         <div id="cont3">
        <a href="#" >Contuct Us</a>
          </div>
    </div>
   </div>
   <!--Header end-->
   <div id="restofpage" onmouseover="dropMenu()" style="height:500px;">
   </div>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
