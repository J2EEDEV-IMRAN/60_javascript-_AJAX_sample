
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  var boxArray=['box1','box2','box3'];
   window.addEventListener('mouseup',function(evt){
    for(var i=0;i<boxArray.length;i++){
    var box=document.getElementById(boxArray[i]);
    if(evt.target!=box && evt.target.parentNode!=box)
    {
      box.style.display='none';
    }
   }
 }
   );
  </script>
</head> 
<body>

 <div id="box1">
    <h3>Page pop out interface1</h3>
 </div> 
  <div id="box2">
     <h3>Page pop out interface2</h3>
 </div> 
  <div id="box3">
    <h3>Page pop out interface3</h3>
 </div> 
<button onclick="document.getElementById('box1').style.display='block'">Pop out interface</button>
<button onclick="document.getElementById('box2').style.display='block'">Pop out interface</button>
<button onclick="document.getElementById('box3').style.display='block'">Pop out interface</button>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 

</body>
</html>
