
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>jQuery plugins</title> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <script>
  function computeLoan()
  {
    var amount=document.getElementById('amount').value;
    var interest_rate=document.getElementById('interest').value;
    var months=document.getElementById('months').value;
    var interest=(amount*(interest_rate*0.01))/months;
    var payment=((amount/months)+interest).toFixed(2);
    payment=payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",");
    document.getElementById('payment').innerHTML='Monthely payment is =$'+payment;

  }
  </script>
</head> 
<body>
  <h1>Javscript monthely payment loan calculator programming</h1>
  Loan Amount: $<input id="amount" type="number" min="1" max="1000000" onchange="computeLoan()" ><br/></p>
  Interest   : <input id="interest" type="number" min="0" max="100" value="10" step="0.1" onchange="computeLoan()" ><br/></p>
  Months     : <input id="months" type="number" min="1" max="72" value="1" step="1" onchange="computeLoan()"><br/></p>
   <h2 id="payment"></h2>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-ui.js"></script>
 <script type="text/javascript" src="js/plugin.js"></script>
</body>
</html>


