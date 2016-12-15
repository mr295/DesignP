<?php
  
  include_once('Psubject.php');
  include_once('Pobserver.php');
  
  define('BR', '<'.'BR'.'>');
  
  echo 'OBSERVER PATTERN'.BR;
  echo BR;
  
  $patternGossiper = new PatternSubject();
  
  $patternGossipFan = new PatternObserver();
  
  $patternGossiper->attach($patternGossipFan);
  
  $patternGossiper->updateFavorites(
     'abstract factory, decorator, visitor');
  
  $patternGossiper->updateFavorites(
     'abstract factory, observer, decorator');
  
  $patternGossiper->detach($patternGossipFan);
  
  $patternGossiper->updateFavorites(
    'abstract factory, observer, paisley');

?>