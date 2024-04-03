<?php
// src/Controller/BlogController.php
namespace App\Controller;

use App\Event\BasketProductAdded;
use App\Service\MailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog",name="Blog",methods={"GET"})
     */
    public function list(MailService $mailService,EventDispatcherInterface $eventDispatcher):Response
    {
        // Symfony events 
        // $event=new BasketProductAdded("dsvsdv", "dsvdsvs"); 
        // $eventDispatcher->dispatch($event); 
        return $this->render("hello/index.html.twig",
        [
            "controller_name"=>$mailService->sendMail()
        ]) ;
    }
}