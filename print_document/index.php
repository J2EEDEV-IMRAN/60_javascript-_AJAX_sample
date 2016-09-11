<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  function printContent(elem)
  {
     var restore=document.body.innerHTML;
     var printContent=document.getElementById(elem).innerHTML;
     document.body.innerHTML=printContent;
     window.print();
     document.body.innerHTML=restore;
  }

  </script>
</head> 
<body>
  <div id="div1">
    this portion contains all about the div1
  </div>
  <button onclick="printContent('div1')">paintContent</button>
<div id="div2">
  this portion contins all aboout the div2
</div>
  <button onclick="printContent('div2')">paintContent</button>
<div id="div3">
 this portion contains all about the div3
  </div>
    <button onclick="printContent('div3')">paintContent</button>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
</html>
