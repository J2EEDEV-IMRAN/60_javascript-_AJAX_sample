
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  Array.prototype.arraySplice=function()
  {
  var ai=Math.floor(Math.random()*this.length);
  var rs=this.splice(ai,1);
  return rs;
  }
  var my_array=['A','B','C','D','E','F','G','H'];
   var result=my_array.arraySplice();
  document.write(result);
  document.write('<hr>');
  document.write(my_array);
  </script>
</head> 
<body>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>


