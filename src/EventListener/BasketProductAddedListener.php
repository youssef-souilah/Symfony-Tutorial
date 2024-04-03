<?php
 // src/EventListener/ExceptionListener.php
 namespace App\EventListener;

use App\Event\BasketProductAdded;
class BasketProductAddedListener
 { 
public function doSomething(BasketProductAdded $event) 
{ 
  echo("from event listener !");
 } 
}