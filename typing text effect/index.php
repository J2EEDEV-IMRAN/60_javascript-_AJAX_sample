<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>
  #myTypingText
  {
    height: 300px;
    width: 300px;
    background: #000;
    color: #fff;
    padding: 20px;
    font-size: 16px;
    line-height: 1.5em;
    font-family: Arial,Helvetica,Sans-serif;
  }

  </style>
  <script>
     var myString='Place your string data here as much as you like';
     var myArray=myString.split('');
     var loopTimer;
     function loop()
     {
      if(myArray.length>0)
      {
      document.getElementById('myTypingText').innerHTML+=myArray.shift();
      }
      else
      {
        clearTimeout(loopTimer);
      }
      loopTimer=setTimeout('loop()',70);
     }
    // window.onload=loop; eiline use koreo kora jae
  </script>
</head> 
<div id="myTypingText"></div>
<script>
loop();      //ei line use koreo kora jae
</script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
</html>

