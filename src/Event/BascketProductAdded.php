<?php
 // src/Events/BasketProductAdded.php
namespace App\Event; 

use Symfony\Contracts\EventDispatcher\Event ;

class BasketProductAdded extends Event { 
const NAME ='basket.product_added'; 
private $product; 
private $customer; 
public function __construct(String $product, String $customer) 
{ 
$this->product=$product; 
$this->customer=$customer; 
} 
public function getProduct() 
{ 
return $this->product; 
} 
public  function getCustomer() 
{ 
return $this->customer; 
} 
}