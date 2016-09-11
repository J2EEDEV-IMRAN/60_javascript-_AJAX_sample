<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>
#wrap{
  background: pink;
  width: 800px;
  margin: 0 auto;      /*you shoud not give height content here bydefault*/
  top:0;
}
#newData{
    background:#999;
  width: 800px;
  height: 900px;
  margin: 0 auto;
  margin-top: 10px;
}
#status{
  position: fixed;

}
  </style>
  <script>
  function yHendler()
  {
    var content=document.getElementById('wrap');
    var contentHeight=content.offsetHeight;
    var y=window.innerHeight+window.pageYOffset;
    if(y>=contentHeight)
    {
      //very important note is that you can place AJAX request here to load dynamic content
      content.innerHTML+='<div id="newData"></div>' 
    }
    document.getElementById('status').innerHTML=contentHeight+' | '+y;
  }
    window.onscroll=yHendler;
  </script>
</head> 
<body>
  <div id="status">0 | 0</div>
  <div id="wrap">htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
  htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing el
  htis is dummy text nothing else htis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing elsehtis is dummy text nothing else
 
  </div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
</html>

