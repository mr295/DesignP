<?php

  include_once('Decorator.php');
  
    class BookTitleStarDecorator extends BookTitleDecorator {
	
	private $btd;
  
    public function __construct(BookTitleDecorator $btd_in) {
	  $this->btd = $btd_in;
    }
    function starTitle() {
	  $this->btd->title = Str_replace(" ","*",$this->btd->title);
	}
  }
  
?>