
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">

  <style>
  .class1{
  height: 100px;
  width: 100px;
  background: #f3f3f3;
  margin: 10px;
  float: left;
}
.class2{
  height: 100px;
  width: 100px;
  background: #000;
  margin: 10px;
  float: left;
}
  </style>
  <script>
 function toggleClass(elem)
 {
      var child=document.getElementById('menu').children;
      for(var i=0;i<child.length;i++)
      {
        child[i].className='class1';
      }
      elem.className='class2';
 }       
  </script>
</head> 
<body>
  <div id="menu">
<div class='class1' onclick="toggleClass(this)"></div>
<div class='class1' onclick="toggleClass(this)"></div>
<div class='class1' onclick="toggleClass(this)"></div>
</div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>
<!--<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
 function toggleClass(elem)
 {
         if(elem.className='class1')
         {
          elem.className='class2';
         }
         else
         {
          elem.className='class1';
         }
 }       
  </script>
</head> 
<body>
<div class='class1' onclick="toggleClass(this)"></div>
<div class='class1' onclick="toggleClass(this)"></div>
<div class='class1' onclick="toggleClass(this)"></div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>-->

