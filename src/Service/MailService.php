<?php
 // src/Services/MailLogger
namespace App\Service; 
class MailService { 
    private $adminEmail; 
    public function __construct($adminEmail) 
    { 
    $this->adminEmail=$adminEmail; 
    } 
    public function sendMail() { 
        return $this->adminEmail;
    } 
}