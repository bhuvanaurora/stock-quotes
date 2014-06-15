<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Stocks</title>
  </head>
  <body>
    <center><h1>Stock prices</h1></center>
    <form action = 'quote.php' method='GET'>
      <input type='text' name='stock_symbol' placeholder="Enter symbol">
      <input type='submit' value='Search'>
    </form>
  </body>
</html>
<!--http://download.finance.yahoo.com/d/quotes.csv?s=RIL.BO&f=sl1d1t1c1ohgv&e=.csv-->
