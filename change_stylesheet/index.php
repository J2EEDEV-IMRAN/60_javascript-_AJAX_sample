
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  function swapstylesheet(css){
   document.getElementById('pagestyle').setAttribute('href',css);
 }
  </script>
</head> 
<body>
  
<div >
  <a href="#" onclick="return false" onmousedown="swapstylesheet('css/dark.css')">Home</a>
   <a href="#" onclick="return false" onmousedown="swapstylesheet('css/dark.css')">About</a>
    <a href="#" onclick="return false" onmousedown="swapstylesheet('css/dark.css')">Contact</a>
</div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 

</body>
</html>
