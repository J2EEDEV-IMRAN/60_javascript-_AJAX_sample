
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
     function rollDice()
     {
      var di1=document.getElementById('dic1');
      var di2=document.getElementById('dic2');
      var status=document.getElementById('status');
      var d1=Math.floor(Math.random()*6)+1;
      var d2=Math.floor(Math.random()*6)+1;
      di1.innerHTML=d1;
      di2.innerHTML=d2;
      var diceTotal=d1+d2;
      status.innerHTML=' You have total '+diceTotal;
      if(d1==d2)
      {
        status.innerHTML+='DOUBLES! you got a free truns';
      }
     }
  </script>
</head> 
<body>
  <div id="dic1" class="dice">0</div>
  <div id="dic2" class="dice">0</div>
  <div id="status"></div>
  <button onclick="rollDice()">roll dice</button>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>


