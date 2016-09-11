
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>
#dialogoverlay{
  display: none;
  opacity: .8;
  position: fixed;
  top: 0px;
  left: 0px;
  background: #FFF;
  width: 100%;
  z-index: 10;
}
#dialogbox{
   display: none;
  position: fixed;
  background: #000;
  border-radius:7px; 
  width:550px;
  z-index: 10;
}
#dialogbox > div { background:#FFF; margin:8px; }
#dialogbox >  #dialogheader{ background: #666; font-size:19px; padding:10px; color:#CCC; }  
#dialogbox >  #dialogbody{ background:#333;padding:20px;  color:#FFF; }
#dialogbox >  #dialogfooter{ background: #666; padding:10px; text-align:right; }
  </style>
<script>
    function deletepost(id)
    {
      /*var post_id=id.replace('post_','');
   var hr = new XMLHttpRequest();
    hr.open("POST", 'another.php', true);
    hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
      if(hr.readyState == 4 && hr.status == 200) {
        var htmloutput='';
          for (var i=0;i<dataoutput.length-1;i++) {
                var dataitem=dataoutput[i].split('|');
                  htmloutput+=dataitem[1]+' '+dataitem[2]+' with id: '+dataitem[0]+' was born in '+dataitem[3]+'<hr>';
          }
      databox.innerHTML=htmloutput;
      }
    }
   hr.send('rpp='+post_id);*/
   document.body.removeChild(document.getElementById(id));
    }

   function customAlert()
   {
    this.render=function(dialog,op,id)
    {
      var winW=window.innerWidth;
      var winH=window.innerHeight;
      var dialogoverlay=document.getElementById('dialogoverlay');
      var dialogbox=document.getElementById('dialogbox');
      dialogoverlay.style.display='block';
      dialogoverlay.style.height=winH+'px';
      dialogbox.style.left=(winW/2)-(550/2)+'px';
      dialogbox.style.top='100px';
      dialogbox.style.display='block';
      document.getElementById('dialogheader').innerHTML='Acknowledge this message';
       document.getElementById('dialogbody').innerHTML=dialog;
        document.getElementById('dialogfooter').innerHTML='<button onclick="Alert.yes(\''+op+'\',\''+id+'\')">YES</button>&nbsp;<button onclick="Alert.cancle()">CANCLE</button>';
    }
    this.cancle=function(){
       document.getElementById('dialogoverlay').style.display='none';
       document.getElementById('dialogbox').style.display='none';
    }
    this.yes=function(op,id)
    {
      if(op=='delete_post')
      {
      deletepost(id);
      }
        document.getElementById('dialogoverlay').style.display='none';
       document.getElementById('dialogbox').style.display='none';
    }
   }
   var Alert=new customAlert();

</script>
</head> 
<body>
  <div id="dialogoverlay"></div>
  <div id="dialogbox">
    <div id="dialogheader"></div>
    <div id="dialogbody"></div>
    <div id="dialogfooter"></div> 
  </div>
  <div id="post_1">
    this part contains first paragraph of the tutorial
    <button onclick="Alert.render('Do you want to delete this message','delete_post','post_1');">Delete</button>
  </div>
   <div id="post_2">
    this part contains second paragraph of the tutorial
    <button onclick="Alert.render('Do you want to delete this message','delete_post','post_2');">Delete</button>
  </div>
    <div id="post_3">
    this part contains third paragraph of the tutorial
    <button onclick="Alert.render('Do you want to delete this message','delete_post','post_3');">Delete</button>
  </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="jquery-ui.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>





