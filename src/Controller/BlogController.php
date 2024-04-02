<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog",name="Blog",methods=["GET"])
     */
    public function list():Response
    {
        return $this->render("hello/index.html.twig",[
            "controller_name"=>"tt"
        ]) ;
        //return $this->redirectToRoute()
        // return Response::create();
        //@Route("/tasks/create",name)
    }
}