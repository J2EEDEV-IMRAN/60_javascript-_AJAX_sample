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
    width: 1200px;
    margin: 0 auto;
    background: #161616;
    }
    #menu {}
      #menu >ul{margin: 0px;padding: 0px; list-style: none;}
        #menu >ul >li{height: 54px;}
        #menu >ul>li>a{
          display: block;
          width: 148px;
          padding: 16px 10px;
          font-size: 16px;
          font-family: Arial,sans-serif,helvetica;
        }


  #topMenubar
  {
    background: #333;
    color: #999;
    font-size: 28px;
    padding: 24px;
  }
  #menu
  {
   background: #000;
   border: 1px solid #E1E1E1;
   padding: 10px 0px;
  }
  .style1{
    background: #000;
    font-size: 16px;
    color: #666;
    padding: 10px 30px;
    text-decoration: none;
    border: #E1E1E1 1px solid;
  }
    .style2{
    background: #055F7C;
    font-size: 16px;
    color: #fff;
    padding: 10px 30px;
    text-decoration: none;
    border: #E1E1E1 1px solid;
  }


  </style>

  <script type="text/javascript">
    <script type="text/javascript" >
  $(document).ready(function(){
      
      $('#menu a').mouseenter(function(){
        $(this).switchClass('style1','style2',300);
      });

      $('#menu a').mouseleave(function(){
        $(this).switchClass('style2','style1',300);
      });

    });
    </script>
   
  </script>

</head> 

<body>
<div id="topMenubar">Jquery css switch class animated hoeizontal menu</div>
<div id="menu">
<ul >
  <li><a class="style1" href="#">Home</a>
  <li><a class="style1" href="#">Services</a></li>
  <li><a class="style1" href="#">Portfolio</a></li>
  <li><a class="style1" href="#">Clients</a></li>
  <li><a class="style1" href="#">Contact Us</a></li>
</ul>
</div>

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>

</body>
