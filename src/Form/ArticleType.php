<?php
 // src/Form/ArticleType.php
 namespace App\Form; 
use App\Entity\Article; 
use Symfony\Component\Form\AbstractType; 
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\OptionsResolver\OptionsResolver; 
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\TextareaType; 
class ArticleType extends AbstractType
 { 
public function buildForm(FormBuilderInterface $builder, array $options) 
{ 
$builder->add('title') ->add('content', TextareaType::class) ->add('author', TextType::class) 
; 
} 
public function configureOptions(OptionsResolver $resolver) 
{ 
$resolver->setDefaults([ 
'data_class'=>Article::class, 
]); 
} 
}