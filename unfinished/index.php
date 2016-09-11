
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  window.addEventListener('load',function(){
  var dir='imgs/'
    var items_container=document.getElementById("items_container");
   var hr = new XMLHttpRequest();
    hr.open("GET", 'another.php', true);
    hr.setRequestHeader("Content-Type", "application/JSON");
    hr.onreadystatechange = function() {
      if(hr.readyState == 4 && hr.status == 200) {
        var d = JSON.parse(hr.responseText);
        items_container.innerHTML='';
          for (var o in d) {
               alert(d[o].pic['imgs1']);
                  
          }
      }
    }
   hr.send(null);  /*there is some problem in this line because in this line we can not palace the variable come from upper php part $last,$rpp*/
   document.getElementById("items_container").innerHTML = "requesting...";
 });
  </script>
</head> 
<body> 
  <div id="items_container"></div>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 

</body>
</html>


