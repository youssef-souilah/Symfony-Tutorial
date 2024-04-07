<?php
 // src/Controller/FormController.php
 namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Routing\Annotation\Route; 
use App\Form\ArticleType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;

class FormController extends AbstractController{ 
/**
 * @Route("/form/new")
 */
 public function new(Request $request) 
{ 
    $article=new Article(); 
    // $validator=Validation::createValidator(); 
    // $violations=$validator->validate($article, [ 
    //     new Length(['min'=>10]), 
    //     new NotBlank(), 
    // ]); 
    // if(0!==count($violations)) { 
    //     // Affiche les erreurs
    //     foreach($violations as $violation) { 
    //         echo$violation->getMessage().'<br>'; 
    //     } 
    // } 
    $form=$this->createForm(ArticleType::class, $article); 
    $form->handleRequest($request); 
    if($form->isSubmitted() &&$form->isValid()) { 
        dump($article); 
    } 
    return$this->render('form/index.html.twig', array( 
        'form'=>$form->createView(), 
    )); 
} 
}