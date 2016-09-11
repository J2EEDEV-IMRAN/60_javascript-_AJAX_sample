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


  </style>
  <script>
  function iFrameon()
  {
 richTextField.document.designMode ='on';
  }
  function iBold()
  {
richTextField.document.execCommand('bold',false,null);
  }
  function iUnderline()
  {
richTextField.document.execCommand('udderline',false,null);
  }
  function iItalic()
  {
richTextField.document.execCommand('italic',false,null);
  }
  function iTextSize()
  {
    var size=prompt('Enter font size between 1-7','');
richTextField.document.execCommand('fontsize',false,size);
  }
  function iFontColor()
  {
    var color=prompt('Define a color or apply a hexadecimal color code to difine advance color:','');
richTextField.document.execCommand('fontcolor',false,color);
  }
  function iHorizontalRule()
  {
richTextField.document.execCommand('inserthorizontalrule',false,null);
  }
  function iUnorderList()
  {
richTextField.document.execCommand('InsertOrderList',false,'newOL');
  }
  function iOrderList()
  {
richTextField.document.execCommand('InsertUnorderList',false,'newUL');
  }
  function iLink()
  {
    var linkURL=prompt('Enter an URL for this link','http://');
richTextField.document.execCommand('createLink',false,linkURL);
  }
  function iUnlink()
  {
richTextField.document.execCommand('Unlink',false,null);
  }
  function iImage()
  {
    var imageSRC=prompt('Enter an image location','');
    if(imageSRC!=null){
   richTextField.document.execCommand('insertimage',false,imageSRC);
     }
  }
  function submit_form()
  {
     var theForm=document.getElementById('myform');
     theForm.elements['myTextArea'].value=window.frames['richTextField'].document.body.innerHTML;
     theForm.submit();
  }

  </script>
</head> 

<body onload="iFrameon()">
  <form action="another.php" id="myform" name="mayform" method="post">
    <p>Entry Title:<input type="text" name="title" id="title" size="80" maxlength="80"></p>
    <p>Entry Body :<br/>
      <div name="wysiwyg_cp" style="padding:8px;width:700px; " >
        <input type="button" onclick="iBold()" value="B">
        <input type="button" onclick="iUnderline()" value="U">
        <input type="button" onclick="iItalic()" value="I">
        <input type="button" onclick="iTextSize()" value="Text Size">
        <input type="button" onclick="iFontColor()" value="Text Color">
        <input type="button" onclick="iHorizontalRule()" value="HR">
        <input type="button" onclick="iUnorderList()" value="UL">
        <input type="button" onclick="iOrderList()" value="OL">
        <input type="button" onclick="iLink()" value="Link">
        <input type="button" onclick="iUnlink()" value="Unlink">
        <input type="button" onclick="iImage()" value="Image">
      </div>
    <textarea style="display:none;" id="myTextArea" name="myTextArea" rows="40" cols="100"></textarea>
    <iframe id="richTextField" name="richTextField" style="border:#000000 1px solid; width:700px; height:300px;"></iframe>
    </p>
    <input type="button" name="mybtn" value="Submit Data" onclick="javascript:submit_form();">
  </form>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
 <script type="text/javascript" src="preloader.js"></script>
</body>
