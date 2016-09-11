
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
<script>
function reveal(event){
    event.target.previousElementSibling.style.clip = "rect(0px, "+(event.clientX-event.target.offsetLeft)+"px, 280px, 0px)";  
}

</script>
</head> 
<body>
  <div class="reveal">
      <img src="imgs/allauddin.jpg">
      <img class="img2" src="imgs/4222.jpg">
      <div class="activator" onmousemove="reveal(event)"></div>
  </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="jquery-ui.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>





