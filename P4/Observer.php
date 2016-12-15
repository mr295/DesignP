<?php
include_once('Subject.php');
  
  abstract class AbstractObserver {
    abstract function update(AbstractSubject $subject_in);
  }
?>