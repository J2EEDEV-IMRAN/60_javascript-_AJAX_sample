<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>

  </style>
  <script>
  var maxL=250;
   function textCounters(ta,cd)
   {
         if(ta.value.length>maxL)
         {
          ta.value=ta.value.substring(0,maxL);
         }
         else
         {
            cd.value=maxL-ta.value.length;
         }
   }
  </script>
</head> 
<form>
<textarea id="ta" style="width:340px;" rows="8" onKeyUp="textCounters(this.form.ta,this.form.countDisplay)" onKeyDown="textCounters(this.form.ta,this.form.countDisplay)"></textarea>
<br/>
<input readonly id="countDisplay" type="text" size="3" maxlength="3" value="250" > Character remaining
</form>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
</html>

