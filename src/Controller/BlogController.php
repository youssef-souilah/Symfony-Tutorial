<?php
// src/Controller/BlogController.php
namespace App\Controller;

use App\Service\MailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog",name="Blog",methods={"GET"})
     */
    public function list(MailService $mailService):Response
    {
        return $this->render("hello/index.html.twig",
        [
            "controller_name"=>$mailService->sendMail()
        ]) ;
    }
}