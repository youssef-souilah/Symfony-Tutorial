<?php
 // src/Entity/Article.php
 namespace App\Entity; 

 use Symfony\Component\Validator\Constraints as Assert; 
class Article 
{ 
 
    



    /**
     * @Assert\NotBlank(message = "Le contenu ne peut être vide.")
     * @Assert\Length(
     * min=3,
     * max=10,
     * minMessage="ce titre est court",
     * maxMessage="ce titre est long"
     * )
     */
 private$title; 

  /**
   * @Assert\NotBlank(message = "Le contenu ne peut être vide.")
   * 
   */
  private$content; 
  /**
   * @Assert\NotBlank(message = "Un auteur doit être associé à l'article")
   */
 
  private$author; 
public function getAuthor() 
{ 
return$this->author; 
} 
public function setAuthor($author) 
{ 
$this->author=$author; 
} 
public function getTitle() 
{ 
return$this->title; 
} 
public function setTitle($title) 
{ 
$this->title=$title; 
} 
public function getContent() 
{ 
return$this->content; 
} 
public function setContent($content) 
{ 
$this->content=$content; 
} 

 } 