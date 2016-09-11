<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style>
  body
  {
    top: 0;
    left:0; 
  }
  #pbc
  {
    width: 250px;
    height: 16px;
    background: #000;
    border: #000 1px solid;

  }
  #pbc>#pb{/*demonstration er jonno >sign use korte pari echara amra #pb use korleo hoto*/
     position: relative;
     background: #06C;
     top: 0;
     width: 0%;
     height: 16px;
     color: #0FF;
     text-align: center;
     max-width: 100%;
  }
  </style>
  <script>
  function _(el)
  {
    return document.getElementById(el);
  }
  function uploadFile()
  {
    var file=_('file1').files[0];
    var formdata=new FormData();
    formdata.append('file1',file);
    var ajax=new XMLHttpRequest();
    ajax.upload.addEventListener('progress',progressHendler,false);
    ajax.addEventListener('load',completeHendler,false);
    ajax.addEventListener('abort',abortHendler,false);
    ajax.addEventListener('error',errorHendler,false);
    ajax.open('post','another.php');
    ajax.send(formdata);

  }
  function progressHendler(event)
  {
    _('pbt').innerHTML=' Uploaded '+event.loaded+' byte of '+event.total;
    var persent=(event.loaded/event.total)*100;
    _('pb').style.width=Math.round(persent)+'%';
    _('status').innerHTML=Math.round(persent)+'% is uploaded please wait';
  }
   function completeHendler(event)
  {
    _('status').innerHTML=event.target.responseText;
     _('pb').style.width=0+'%';
  }
   function abortHendler(event)
  {
   _('status').innerHTML='upload Aborted';
  }
   function errorHendler(event)
  {
 _('status').innerHTML='Upload Failed';
  }

  </script>
</head> 
<body>
      <form id="upload_form" method="post" enctype="multipart/form-data">
        <input type="file" name"file1" id="file1"><br/>
        <input type="button" value="Upload" onclick="uploadFile()">
        <div id="pbc">
           <div id="pb"></div>
           <div id="pbt"></div><br/>
           <div id="status"></div>
        </div>
      </form>     
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
