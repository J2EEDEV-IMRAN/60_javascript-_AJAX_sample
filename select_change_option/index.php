<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>
  body{
    top: 0;
    margin: 0;
  }

  </style>
  <script>
  function populate(sel1,sel2)
  {
    var select1=document.getElementById(sel1);
    var select2=document.getElementById(sel2);
    select2.innerHTML='';
    if(select1.value=='chevy')
    {
      var optionArray=['|','imran|Imran','allauddin|Allauddin','moni|Moni'];
    }
    else if(select1.value=='dodge')
    {
      var optionArray=['|','imran|Imran','kalim|Kalim','moni|Moni'];
    }
    for(var o in optionArray)
    {
      var opt=optionArray[o].split('|');
      var newelement=document.createElement('option');
      newelement.value=opt[0];
      newelement.innerHTML=opt[1];
      select2.add(newelement);
    }
  }

  </script>
</head> 

<body>
  <select id="select1" name="select1" onchange="populate(this.id,'select2')">
    <option id=""></option>
    <option value="chevy">Chevy</option>
    <option value="dodge">Dodge</option>
  </select>
<hr>
  <select id="select2" name="select2">
  </select>
   
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
