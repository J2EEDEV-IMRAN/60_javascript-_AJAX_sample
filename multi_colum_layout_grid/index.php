
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>

  function renderGride(){
    var blocks=document.getElementById('grid_container').children;
    var pad=10,cols=3,newleft,newtop;
    for(var i=1;i<blocks.length;i++)
    {
     if(i%cols==0)
     {
        newtop= blocks[i-cols].offsetTop+blocks[i-cols].offsetHeight+pad;
        blocks[i].style.top=newtop+'px';
     } 
     else
     {
      if(blocks[i-cols])
      {
          newtop= blocks[i-cols].offsetTop+blocks[i-cols].offsetHeight+pad;
        blocks[i].style.top=newtop+'px';
      }
         newleft= blocks[i-1].offsetLeft+blocks[i-1].offsetWidth+pad;
          blocks[i].style.left=newleft+'px';
     }
    }

  }
    window.addEventListener("load",renderGride,false);
    window.addEventListener("resize",renderGride,false);
  </script>
</head> 
<body>
     <div id="grid_container">
      <div style="height:130px;"><div>1</div></div>
      <div style="height:290px;"><div>2</div></div>
      <div style="height:140px;"><div>3</div></div>
      <div style="height:110px;"><div>4</div></div>
      <div style="height:150px;"><div>5</div></div>
      <div style="height:300px;"><div>6</div></div>
      <div style="height:190px;"><div>7</div></div>
      <div style="height:150px;"><div>8</div></div>
      <div style="height:180px;"><div>9</div></div>
      <div style="height:150px;"><div>10</div></div>
      <div style="height:160px;"><div>11</div></div>
      <div style="height:130px;"><div>12</div></div>
    
     </div>
    <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="jquery-ui.js"></script>
     <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>
