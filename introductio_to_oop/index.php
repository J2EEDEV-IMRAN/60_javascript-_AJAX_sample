
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  function rotationAnimation()
  {
  this.d=0;
 this.animate=function(im,c)
{
      var imgs=document.getElementById(im);
      var me=this;
      if(c=='cw'){this.d++;}else{this.d--;}
      imgs.style.transform='rotate('+this.d+'deg)';
      if(this.d>359)
      {
        this.d=1;
      }
      else if(this.d<-359){
       this.d=-1;
      }
      setTimeout(function(){me.animate(im,c);},20);

}
}
  </script>
</head> 
<body>
<img id="img1" src="imgs/allauddin.jpg" alt="cong1" >
<img id="img2" src="imgs/4222.jpg" alt="cong2">
<img id="img3" src="imgs/allauddin.jpg" alt="cong3">
<script>
var imgr1=new rotationAnimation();
var imgr2=new rotationAnimation();
var imgr3=new rotationAnimation();
imgr1.animate('img1','cw');
imgr2.animate('img2','ccw');
imgr3.animate('img3','cw');
</script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>


