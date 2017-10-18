<?php
namespace Daan\FizzBuzzBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Daan\FizzBuzzBundle\Model\FizzBuzzSettings;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FizzBuzzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('word1', TextType::class)
            ->add('word2', TextType::class)
            ->add('number1', IntegerType::class)
            ->add('number2', IntegerType::class)
            ->add('start', IntegerType::class)
            ->add('end', IntegerType::class)
            ->add('reset', SubmitType::class, array(
                'attr' => array('class' => 'reset')))
        ;
            
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => FizzBuzzSettings::class,
        ));
    }
    
    public function getName() 
    {
        return 'daan_fizz_buzz';
    }
}

