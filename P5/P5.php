<?php
//Factory/Decorator/Strategy

 class shoesFactory {
     public static function createShoes($brand)   {
      $obj= new shoes;
      $obj->brand=$brand;       
      return $obj;
     }
     }

 class Shoes{
    public $brand;   
    // the array just has  a string inside of Gucci are expensive
    public function __construct($brand)
    {
      $this->brand= $brand;     
    }
    public function getBrand()
    {
      return $this->brand;
    } 
 }
//Start of Strategy 

class stringstrat{
    
    private $strategy = null;
    public function __construct($stratType)
    {
    switch ($stratType) {

       case "G":
         $this->strategy = new decorateExclaimation();
       break;
       
       case "U":
         $this->strategy = new decorateSlashes();
       break;
      }
    }
    public function showShoesBrand($shoes)
    {
        return $this->strategy->showBrand($shoes);
    }
}

interface strategydecorator{
  
  public function showBrand($shoes);
}

class decorateExclaimation implements strategydecorator{
    public function showBrand($shoes)
    {
        $brand = $shoes->getBrand();
        $this->stringCount++;
        
        return str_replace(' ', '!', $brand);
    }
}

class decorateSlashes implements strategydecorator{
    public function showBrand($shoes){      
        $brand = $shoes->getBrand();
        
        $this->stringCount++;        
        
        return str_replace(' ','/', $brand);
    }
}
// Starting the instaniation and outputs

   $shoes= shoesFactory::createShoes('Guccis are to expensive!'); 
   
   $strategyContextExlaim = new StringStrat('G');
   
   $strategyContextSlash = new StringStrat('U');
   
   echo ' Hello and welcome!.';
   echo '<br>';
   echo ' This has strategy and decorator since the straegy here is to change a string.';
   echo '<br>';
   echo " The array has a string that says Guccis are to expensive! , so the strategy is just taking the string and editting it in different ways using a decorator.";
   echo '<br>';

   echo $strategyContextExlaim->showShoesBrand($shoes); 
   echo '<br>';

   echo $strategyContextSlash->showShoesBrand($shoes); 
   echo '<br>';
?>