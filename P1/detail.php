<html>
<head>

  <meta charset="UTF-8">
  <title>Pizza Shop</title>

</head>


<body>

  <h3> Payment Method Selected </h3>

  <?php
    include_once('pizza.php');
    include_once('pizzaDecorator.php');
    include_once('strategyCost.php');
    
    print_r($_POST["payment"]);
    echo "<br>";
      
    if ($_POST["payment"] == 'Cash'){
      $payment = new Payment( 'Cash' );
      $payment->pay();
      echo "\n";
    }
    elseif($_POST["payment"] == 'Paypal'){
        $payment = new Payment( 'Paypal' );
        $payment->pay();
        echo "\n";
    }
   elseif($_POST["payment"] == 'Credit Card'){
     $payment = new Payment( 'CreditCard' );
     $payment->pay();
     echo "\n";
   }
   else{
     echo 'You cannot use that payment method';
   }
?>


</body>
<html>