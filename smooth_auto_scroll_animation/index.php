<!DOCTYPE html>
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
  #top{
    position: absolute;
    font-size: 24px;
    background:yellow;
    color: #000;
    font-weight: bold;
    width: 150px;
    height: 100px;
    padding-top: 70px;
    text-align: center;
    top: 0px;
    transtion: top 0.1s linear 0s;
    right: 0px;
   display: none;
  }
  .content_box{
    height: 500px;
    margin:20px;
    background: #fff;
    border: #ccc 2px dashed;
    font-size: 28px; 
  }

  </style>
  <script>
  var scrollY=0;
  var distance=40;
  var speed=20;
  function autoScrollTo(elem)
  {
    var targetY=document.getElementById(elem).offsetTop;
    var bodyHeight=document.body.offsetHeight;
    var currentY=window.pageYOffset;
    var ypos=currentY+window.innerHeight;
    var time=setTimeout('autoScrollTo(\''+elem+'\')',24);
    if(ypos>bodyHeight)
    {
      clearTimeout(time);
    }
    else
    {
     if(currentY<targetY-distance)
     {
        scrollY=currentY+distance;
        window.scroll(0,scrollY);
     }
     else
     {
      clearTimeout(time);
     }
    }
  }
  function resetScroll(elem)
  {
      var targetY=document.getElementById(elem).offsetTop;
   var bodyHeight=document.body.offsetHeight;
   var currentY=window.pageYOffset;
   var ypos=currentY+document.innerHeight;
   var time=setTimeout('resetScroll(\''+elem+'\')',24); 
 
    if(currentY>targetY)
    {
      scrollY=currentY-distance;
      window.scroll(0,scrollY);
    }
    else
    {
      clearTimeout(time);
    }
  }


  //another part
  var maxH=700;
 function fadeIn()
 {
      var contentbox= document.getElementById('top');
      contentbox.style.display='block';
      contentbox.style.opacity=1;
      contentbox.style.top = (window.pageYOffset+500)+'px';
  

 }
 function fadeOut()
 {
   var contentbox= document.getElementById('top');
   contentbox.style.opacity=0;
 }
  function goTop()
  { 
    
    var currentY=window.pageYOffset;
 if (currentY>maxH) 
 {
   fadeIn();
 }
 else if(currentY<maxH){
  fadeOut();
 }

  }
  window.addEventListener('scroll',goTop,false);
  </script>
</head> 

<body>
   <!--fade in scroll part start-->
   <div id="top" onclick="resetScroll('myheading')">TOP</div>
    <!--fade in scroll part end-->

  <!--div scroll part start-->
<h1 id="myheading">Smoot animation auto scroll</h2>
<a href="#" onclick="return false" onmousedown="autoScrollTo('div1')">document section1</a><br/>
<a href="#" onclick="return false" onmousedown="autoScrollTo('div2')">document section2</a><br/>
<a href="#" onclick="return false" onmousedown="autoScrollTo('div3')">document section3</a><br/>

<div id="div1" class="content_box">content of div 1</div>
<a href="#" onclick="return false" onmousedown="resetScroll('myheading')">go back to top</a> 
<div id="div2" class="content_box">content of div 2</div>
<a href="#" onclick="return false" onmousedown="resetScroll('myheading')">go back to top</a> 
<div id="div3" class="content_box">content of div 3</div>
<a href="#" onclick="return false" onmousedown="resetScroll('myheading')">go back to top</a> 
 <!--div scroll part end-->
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
