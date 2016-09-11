
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  function yScroll()
  {
    var pagetop=document.getElementById('pagetop');
    var menu=document.getElementById('menu');
    var yPos=window.pageYOffset;
    if(yPos>150)
    {
      pagetop.style.height='40px';
      pagetop.style.paddingTop='8px';
      menu.style.height='0px';
    }
    else
    {
      pagetop.style.height='120px';
      pagetop.style.paddingTop='50px';
      menu.style.height='50px';
          }
  }
  window.addEventListener('scroll', yScroll);
      
  </script>
</head> 
<body>
<div id="pagetop">
  header
  <div id="menu">Menu System</div>
</div>
<div di="wrapper">
  <script>
  for( var i=0;i<50;i++)
  {
    document.write('<h2>the paragraph contains only dummy data notheing else.....</h2>');
  }
  </script>
</div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>


