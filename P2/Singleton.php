<?php

  class BookSingleton {
    
    private $author = 'Giant Of Fire, Horse Of Dread, Breaking History, and Love Without Shame';
    
    private static $book = NULL;
    
    private static $isLoanedOut = FALSE;
    
    private function __construct() {
    }
    
    static function borrowBook() {
      if (FALSE == self::$isLoanedOut) {
        if (NULL == self::$book) {
           self::$book = new BookSingleton();
        }
        self::$isLoanedOut = TRUE;
        return self::$book;
      } else {
        return NULL;
      }
    }
    
    function returnBook(BookSingleton $bookReturned) {
        self::$isLoanedOut = FALSE;
    }
    
    function getAuthor() {return $this->author;}
    
    function getTitle() {return $this->title;}
    
    function getAuthorAndTitle() {
      return $this->getTitle() . ' --> ' . $this->getAuthor();
    }
  }
?>