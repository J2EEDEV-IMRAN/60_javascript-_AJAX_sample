
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
      function tipCalculator(value,bill){
        var slideval=document.getElementById('slideval');
        var tip=document.getElementById('tip');
        var bill=document.getElementById(bill).value; // input value jodi kau string value input kore tar jonno validation korte hobe kintu ei statement ta kichu vul dekhache   if(bill===NaN){tip.innerHTML='Input a intager value'; }else{tip.innerHTML='$'+percentage*bill;}
        var percentage=value*0.01;
        slideval.innerHTML=value+'%';
             
             
        tip.innerHTML='$'+percentage*bill;
              
         
       }
  </script>
</head> 
<body>
<h1>Tip Calculator</h1>
<p>Enter the bill amount of your meal :$<input type="text" id="bill"></p>
<p>Tip percentage :<span> <input type="range" id="range" min="0" max="100" value="0" onchange="tipCalculator(this.value,'bill')"><span id="slideval">0%</span></span></p>
<h1> Tip to leave:<span id="tip"></span></h1>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>


