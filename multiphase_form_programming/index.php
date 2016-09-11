<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  var fname,lname,gender,country;
  function _(x)
  {
    return document.getElementById(x);
  }
  function processPhase1()
  {
     fname=_('fname').value;
    lname=_('lname').value;
    if(fname.length>2 && lname.length>2)
    {
      phase1.style.display='none';
      phase2.style.display='block';
      _('progressbar').value=33;
      _('status').innerHTML='phase 2 of 3';
    }
    else
    {
      alert('Plese fill up these field');
    }
  }

    function processPhase2()
  {
     gender=_('gender').value;
    if(gender.length>0)
    {
      phase2.style.display='none';
      phase3.style.display='block';
       _('progressbar').value=66;
      _('status').innerHTML='phase  3 of 3';
    }
    else
    {
      alert('Plese select one of the field');
    }
  }

      function processPhase3()
  {
    country=_('country').value;
    if(country.length>2)
    {
      _('phase3').style.display='none';
      _('show_all_data').style.display='block';
      _('display_fname').innerHTML=fname;
      _('display_lname').innerHTML=lname;
      _('display_gender').innerHTML=gender;
      _('display_country').innerHTML=country;
       _('progressbar').value=100;
      _('status').innerHTML='Data overview';
    }
    else
    {
      alert('Plese select one of the field');
    }
  }
  function submitForm()
  {
 _('submitForm').method="post";
 _('submitForm').action="another.php";
 _('submitForm').Submit();
  }
 
  </script>
</head> 
<body>
  Progress Bar:<progress id="progressbar" min="0" max="100" value="0"stye="width:250px"></progress>
  <div id="status">Sate 1 of 3</div>
   <form id="multiphase" onsubmit="return false">
    <div id="phase1">
      First Name :<input type="text" id="fname" ><br/>
      Last Name  :<input type="text" id="lname" ><br/>
      <button onclick="processPhase1()">Continue</button>
    </div>

        <div id="phase2">
         Gender:<select id="gender">
          <option value=""></option>
          <option value="m">Male</option>
          <option value="f">Female</option>
          </select>
      <button onclick="processPhase2()">Continue</button>
    </div>
    
    <div id="phase3" >
         Country:<select id="country" name="country">
          <option value=""></option>
          <option value="United States">United States</option>
          <option value="India">India</option>
            <option value="United Kingdome">United Kingdome</option>

          </select>
      <button onclick="processPhase3()">Continue</button>
    </div>

    <div id="show_all_data">
      First Name:<span id="display_fname"></span><br>
      Last Name :<span id="display_lname"></span><br>
      Gender    :<span id="display_gender"></span><br>
      Country   :<span id="display_country"></span><br>
      <button onclick="submitForm()">Submit</button>
    </div>
   </form>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>
