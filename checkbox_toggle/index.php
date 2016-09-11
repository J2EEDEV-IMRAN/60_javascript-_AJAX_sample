
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>&#9654;jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
function toggleCheckbox(master,cn)
{
       var cbArray=document.getElementsByClassName(cn);
       for(var i=0;i<cbArray.length;i++)
       {
          var cb=document.getElementById(cbArray[i].id);
          cb.checked=master.checked;
       }
}
  </script>
</head> 
<body>
<input type="checkbox" id="cb_master" onchange="toggleCheckbox(this,'checkbox1')"/>Togglecheckbox<br/><br/>
<input type="checkbox" id="cb_1" class="checkbox1">checkobx1<br/>
<input type="checkbox" id="cb_2" class="checkbox1">checkobx2<br/>
<input type="checkbox" id="cb_3" class="checkbox1">checkobx3<br/>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>


