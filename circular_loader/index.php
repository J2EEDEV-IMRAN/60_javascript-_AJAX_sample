
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">

</head> 
<body>
  <canvas id="my_canvas" width="70" height="70" style="border:1px dashed #CCC;"></canvas>
<script>
  var ctx=document.getElementById('my_canvas').getContext('2d');
  var cw= ctx.canvas.width;
  var ch=ctx.canvas.height;
  var al=0;  //amount loaded
  var start=4.72;
  var diff;
  function progressSim()
  {
    diff=((al / 100) * Math.PI*2*10).toFixed(2);
    ctx.clearRect(0,0,cw,ch);
    ctx.lineWidth=10;
    ctx.strokeStyle='#09F';
    ctx.fillStyle='#09F';
    ctx.textAlign='center';
    ctx.fillText(al+'%',cw*0.5,ch*0.5+2,cw);
    ctx.beginPath();
    ctx.arc(35,35,30,start,diff/10+start,false);
    ctx.stroke();
    if (al>=100) {clearTimeout(sim);}
    al++;
  }
  var sim=setInterval(progressSim,50);


</script>
    <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="jquery-ui.js"></script>
     <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>
