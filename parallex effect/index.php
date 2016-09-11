<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  function parallex()
  {
   var parallex1=document.getElementById('parallex1');
   parallex1.style.top=-(window.pageYOffset/4)+'px';
 }
 window.addEventListener('scroll',parallex,false);
  </script>
</head> 
<body>
  <div id="parallex1">
  </div>
<div id="content">
  <script>
  for( var i=0;i<40;i++)
  {
      document.write('<h2>this tag contains dummy content.....</h2>');
  }
  </script>
</div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
</html>
