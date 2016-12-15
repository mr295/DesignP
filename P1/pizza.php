<?php
  
  interface Pizza {
    function cost();
    function description();
  }
  
  class Special implements Pizza {
    function cost()
    {
      return 10;
    }
    function description ()
    {
      return "Special Topping";
    }
  }
?>