
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  function ajax_json_data(letter){
    var paginationcontrol=document.getElementById("paginationcontrol");
    var data=document.getElementById("data");
   var hr = new XMLHttpRequest();
    hr.open("POST", 'another.php', true);
    hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var dataoutput = hr.responseText.split('||');
	      var	htmloutput='';
          for (var i=0;i<dataoutput.length-1;i++) {
                var dataitem=dataoutput[i].split('|');
                  htmloutput+=dataitem[1]+' '+dataitem[2]+' with id: '+dataitem[0]+' was born in '+dataitem[3]+'<hr>';
          }
			data.innerHTML=htmloutput;
	    }
    }
   hr.send('letter='+letter); 
   document.getElementById("paginationcontrol").innerHTML = "requesting...";
      var btns='';
      var letters='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var letterArray=letters.split('');
      for(var i=0;i<26;i++)
      {
        var letter=letterArray.shift();
         btns+='<button onclick="ajax_json_data(\''+letter+'\')";>'+letter+'</button>';
      }
      paginationcontrol.innerHTML=btns;
      
    

}
  
  </script>
</head> 
<body>
  

   <div id="paginationcontrol"></div>
  <div id="data"></div>
    <script type="text/javascript" >ajax_json_data();</script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 

</body>
</html>