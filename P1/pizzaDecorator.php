<?php

  include_once('pizza.php');
  
  abstract class PizzaTopping implements Pizza {
    protected $pizza;
  
  function __construct(Pizza $pizza)
  {
    $this->pizza = $pizza;
  }
  abstract function cost();
  
  abstract function description();
}
  
  class Chicken extends PizzaTopping {
    function cost ()
    {
        return $this->pizza->cost() + 5;
    }
    function description()
    {
        return $this->pizza->description() . ",  Chicken, Pepperoni, and Pasta";
    }
}
?>