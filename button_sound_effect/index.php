
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
   var beep=new Audio();
   beep.src='beep5.mp3';
  </script>
</head> 
<body>
  
<div >
  <a href="#" onclick="return false" onmousedown="beep.play()">Home</a>
   <a href="#" onclick="return false" onmousedown="beep.play()">About</a>
    <a href="#" onclick="return false" onmousedown="beep.play()">Contact</a>
</div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 

</body>
</html><hr>
Additional way

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
   var beep=new Audio();
   beep.src='beep5.mp3';
   function playBtnSound(num)
   {
    beep.play();
    document.getElementById('num').innerHTML=num;

   }
  </script>
</head> 
<body>
  
<div >
  <button  onmousedown="playBtnSound(1)">Home</button>
  <button  onmousedown="playBtnSound(2)">ABOUT</button>
    <button  onmousedown="playBtnSound(3)">ABOUT</button>
</div>
YOU HAVE PLAYED SECTION <span id="num"></span>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 

</body>
</html>