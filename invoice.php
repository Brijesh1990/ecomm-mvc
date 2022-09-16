<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Culture art billing systems</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <h1>INVOICE 3-2-1</h1>
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>Culture Art,<br /> 150 feet ring road Rajkot</div>
        <div>(091)-999-8003879 </div>
        <div><a href="mailto:company@example.com">info@cultureart.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Booking appointment</div>
        <div><span>CLIENT</span> <?php echo $bill[0]["firstname"];?></div>
        <div><span>ADDRESS</span> <?php echo $bill[0]["address"];?></div>
        <div><span>EMAIL</span> <a href="mailto:info@culture.com"><?php echo $bill[0]["email"];?></a></div>
       
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
           
          </tr>
        </thead>
        <tbody>
            
<?php
foreach($bill as $row) 
{
?>
          <tr>
            <td class="service"><?php echo $row["pname"];?></td>
            <td class="service"><?php echo $row["pname"];?></td>
            <td class="service"><?php echo $row["description"];?></td>
            <td class="service"><?php echo $row["price"];?></td>
          
          </tr>
  
          <?php 
}
?>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total"><?php echo $subtot[0]["total"];?></td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>