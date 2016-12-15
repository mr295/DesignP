<?php
  
  include_once('Singleton.php');
  include_once('BookBorrower.php');
  
  writeln('SINGLETON PATTERN');
  writeln('');
  
  $bookBorrower1 = new BookBorrower();
  
  $bookBorrower2 = new BookBorrower();
  
  $bookBorrower1->borrowBook();
  
  writeln('BookBorrower1 asked to borrow the book');
  writeln('Book Titles: ');
  writeln($bookBorrower1->getAuthorAndTitle());
  writeln('');
  
  $bookBorrower2->borrowBook();
  
  writeln('BookBorrower2 asked to borrow the book');
  writeln('Book Titles: ');
  writeln($bookBorrower2->getAuthorAndTitle());
  writeln('');
  
  $bookBorrower1->returnBook();
  
  writeln('BookBorrower1 returned the book');
  writeln('');
  
  $bookBorrower2->borrowBook();
  
  writeln('Book Titles: ');
  writeln($bookBorrower1->getAuthorAndTitle());
  writeln('');
  writeln('Have a Nice Day!');
  
  function writeln($line_in) {
    echo $line_in.'<'.'BR'.'>';
  }
?>