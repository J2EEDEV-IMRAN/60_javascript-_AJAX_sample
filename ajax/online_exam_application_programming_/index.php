<?
 require_once('test1.php');
 $query=mysql_query("SELECT COUNT(id) FROM users") or die('there is a problem');
 $rows=mysql_fetch_row($query);
 $total_row=$rows[0];
 $last=$total_row;
  if ($last<1) {
   $last=1;
 }
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  var correct=0,choices;
  function _(x)
  {
    return document.getElementById(x);
  }
  function ajax_json_data(pn){
    var result,id;
    var last= <? echo $last ?>;
    var databox=document.getElementById("databox");
    var paginationcontrol=document.getElementById("paginationcontrol");
   var hr = new XMLHttpRequest();
    hr.open("POST", 'another.php', true);
    hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
      if(hr.readyState == 4 && hr.status == 200) {
        var dataoutput = hr.responseText.split('||');
        var htmloutput='';
          for (var i=0;i<dataoutput.length-1;i++) {
                var dataitem=dataoutput[i].split('|');
                  htmloutput+='<h1>'+dataitem[0]+' of '+last+' Question </h3><br/><h2>'+dataitem[1]+'<h3><br/><input type="radio" name="choice" value="A">'+dataitem[2]+'<br/><input type="radio" name="choice" value="B">'+dataitem[3]+'<br/><input type="radio" name="choice" value="C">'+dataitem[4]+'<br/><input type="radio" name="choice" value="D">'+dataitem[5]+'<br/><button onclick="checkAnswer(\''+dataitem[6]+'\',\''+dataitem[0]+'\',\''+last+'\')">Submit Answer</button>';
                  result=dataitem[6];
          }
      databox.innerHTML=htmloutput;
      }
    }
   hr.send('pn='+pn+'&last='+last);  /*there is some problem in this line because in this line we can not palace the variable come from upper php part $last,$rpp*/
   document.getElementById("databox").innerHTML = "requesting...";
 
  var paginationctrl='';
   if (last!=1) 
   {
      if(pn>1)
       {
           paginationctrl+='<button onclick="ajax_json_data('+(pn-1)+')">&lt;</button>';
      }
      paginationctrl+='&nbsp;&nbsp; <b>page '+pn+' of '+last+' &nbsp; &nbsp;';
      if (pn!=last) 
      {
         paginationctrl+='<button onclick="ajax_json_data('+(pn+1)+')">&gt;</button>';
      }
   }
   paginationcontrol.innerHTML=paginationctrl;
}
     function checkAnswer(result,id,last)
   {
   choice = document.getElementsByName("choice");
  for(var i=0; i<choice.length; i++){
    if(choice[i].checked){
      choices = choice[i].value;
    }
  }
  if(choices == result){
    correct++;
  }
 if(id==last)
 {
  document.getElementById('databox').innerHTML='<h1> You have give '+correct+' correct answer out of'+last+'</h1>';
 }
}
  </script>
</head> 
<body>
  
  <div id="databox"></div>
   <div id="paginationcontrol"></div>
   <script type="text/javascript">ajax_json_data(1)</script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 

</body>
</html>



