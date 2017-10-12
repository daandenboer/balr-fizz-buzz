<?php
namespace Daan\FizzBuzzBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Daan\FizzBuzzBundle\Model\FizzBuzzSettings;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FizzBuzzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('word1', TextType::class)
            ->add('word2', TextType::class)
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => FizzBuzzSettings::class,
        ));
    }
}

