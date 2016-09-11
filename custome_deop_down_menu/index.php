
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>
  body{
    top: 0;
    margin: 0;
  }
  #header{
     height: 100px;
     background: #D2E9FF;
     border-bottom: #09F 1px solid;
  }
  #logo{
     height: 75px;
     font-size: 46px;
     padding: 0px 12px;
     border-bottom: #09F 1px dashed;
  }
  #headermenusystem{
     margin-left: 20px;
  }
  #headermenusystem>div{
     float: left;
     margin: 0px 20px;
  }
 .dropmenu{
      display: none;
      position: absolute;
      top: 100px;
      width: 120px;
      background: #D2E9FF;
      z-index: 2;
      padding: 4px;
      border: #0385CB 3px solid;
      padding: 4px;
      border-top: none;
      border-radius: 0px 0px 8px 8px;
  }
 .dropmenu>a
  {
    display: block;
    margin: 4px;
    padding: 7px;
    font-size: 14px;
   text-decoration: none;
   border-radius: 3px;
   border: #666 1px solid;
   color: #000;
   background: #E8E8E8;
  }
  .dropmenu>a:hover
  {
    background: #fff;
    color: #06F;
    border: #06F 1px solid;

  }
  #restofpage
  {
     padding: 36px;
  }
  </style>
  <script>
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
