<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  function ajax_json_gallary(folder){
    
   var hr = new XMLHttpRequest();
    hr.open("POST", 'another.php', true);
    hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var d = JSON.parse(hr.responseText);
			var thumbnailbox=document.getElementById("thumbnailbox");
      pictureframe.innerHTML='<img src="'+d.img1.src+'"/>';
			thumbnailbox.innerHTML ='';
			for(var o in d)
			{
				if(d[o].src)
				{
				thumbnailbox.innerHTML+='<div onclick="putinframe(\''+d[o].src+'\')"><img src="'+d[o].src+'"/></div>';
			    }
			}
	    }
    }
   hr.send('folder='+folder); 
   document.getElementById("thumbnailbox").innerHTML = "requesting...";
}
function putinframe(src)
{
      var pictureframe= document.getElementById('pictureframe');
     pictureframe.innerHTML='<img src="'+src+'">';
}
  </script>
</head> 
<body>
  <div id="pagetop">JSON PHP SMART PHOTO GALLARY</div>
  <div id="thumbnailbox"></div>
  <div id="pictureframe"></div>
  <div id="albumbox">
   <h3>My photo albums</h3>
   <a href="#" onclick="return false" onmousedown="ajax_json_gallary('imgs')">Gallary_1</a><br>
   <a href="#" onclick="return false" onmousedown="ajax_json_gallary('gallary')">Gallary_2</a>
  </div>
   <script type="text/javascript">ajax_json_gallary('imgs')</script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 

</body>
</html>