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
            ->add('word1', TextType::class, array('label' => 'First word'))
            ->add('word2', TextType::class, array('label' => 'Second word'))
            ->add('number1', IntegerType::class, array('label' => 'Show first word at'))
            ->add('number2', IntegerType::class, array('label' => 'Show second word at'))
            ->add('start', IntegerType::class, array('label' => 'Start point'))
            ->add('end', IntegerType::class, array('label' => 'End point'))
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

