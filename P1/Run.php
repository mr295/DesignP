<html>
  <head>

    <meta charset="UTF-8">
    <title>Pizza Shop</title>

  </head>



  <body>

      <p> Welcome, right now we are offering a new combo pizza</p>
      <p> Description: </p>

      <?php
        include_once('pizza.php');
        include_once('pizzaDecorator.php');
        include_once('strategyCost.php');
        
        $reg_Pizza = new Special();
        $pizzaChicken = new Chicken($reg_Pizza);
        
        echo $pizzaChicken -> description();
        echo "<br>";
        
        echo " Costs only: $";
        echo $pizzaChicken -> cost();
      ?>

      <p> Please, select one of the following payment method</p>

        <form action="detail.php" method = "post">
          Payment:
          <input type="text" name="payment" placeholder = "Cash, Paypal ,Credit Card">
          <button type="enter" value="enter">Enter</button>
  </body>

  </html>