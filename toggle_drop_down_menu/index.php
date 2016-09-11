
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>

  </style>
  <script>
  function toggleNavePanel(elem)
  {
     var section_panel=document.getElementById(elem),navearrow=document.getElementById('navearrow'),maxH='300px';
     if(section_panel.style.height==maxH) {
        section_panel.style.height='0px';
        navearrow.innerHTML='&#9662;';  
     }
     else
     {
         section_panel.style.height=maxH;
        navearrow.innerHTML='&#9652;'; 
     }
  }
  </script>
</head> 
<body>
<div id="topbar">
  <div id="logo">Logo</div>
  <div id="sections_btn_holder">
    <button onclick="toggleNavePanel('section_panel')">Navigator<span id="navearrow">&#9662;</span></button>
  </div>

  <div id="section_panel">
  <div>
    Try to add more thig here be creative. Try to add more thig here be creative. Try to add more thig here be creative. Try to add more thig here be creative.
     Try to add more thig here be creative. Try to add more thig here be creative. Try to add more thig here be creative. Try to add more thig here be creative.
      Try to add more thig here be creative. Try to add more thig here be creative. Try to add more thig here be creative. Try to add more thig here be creative.
  </div>
</div>
</div>


 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
</html>
<!--  image.addEventListener('click',function(){
     image.style.animation= 'ball-bounce 0.7s steps(6) infinite';
  });-->
