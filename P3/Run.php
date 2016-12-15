<?php
include_once('Book.php');
  include_once('Decorator.php');
  include_once('ExclaimDecorator.php');
  include_once('StarDecorator.php');
  echo tagins("html");
  echo tagins("head");  
  echo tagins("/head");  
  echo tagins("body");
  echo "BELOW ARE THE BOOK TITLES";
  echo tagins("br").tagins("br");
  $patternBook = 
    new Book("Giant Of Fire, Horse Of Dread, Breaking History, and Love Without Shame");
				
  $decorator = new BookTitleDecorator($patternBook);
  $starDecorator = new BookTitleStarDecorator($decorator);
  $exclaimDecorator = new BookTitleExclaimDecorator($decorator);
  
  echo "showing title : "
    .tagins("br");
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");
  
  echo "showing title after two exclaims added : "
    .tagins("br");
  $exclaimDecorator->exclaimTitle();
  $exclaimDecorator->exclaimTitle();
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");
  
  echo "showing title after star added : "
    .tagins("br");
  $starDecorator->starTitle();
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");
  
  echo "showing title after reset: "
    .tagins("br");
  echo $decorator->resetTitle();
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");
  echo tagins("br");
  
  echo tagins("/body");
  echo tagins("/html");
  

  function tagins($stuffing) {
    return "<".$stuffing.">";
  }
  
?>