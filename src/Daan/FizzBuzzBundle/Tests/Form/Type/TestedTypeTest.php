<?php
namespace Daan\FizzBuzzBundle\Tests\Form\Type;

use Daan\FizzBuzzBundle\Form\Type\FizzBuzzType;
use Symfony\Component\Form\Test\TypeTestCase;
use Daan\FizzBuzzBundle\Model\FizzBuzzSettings;

class FizzBuzzTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        $formData = array(
            'word1' => 'BALR.',
            'word2' => '433'
        );

        $form = $this->factory->create(FizzBuzzType::class);
        
        $object = new FizzBuzzSettings();
        
        $object->setWord1($formData['word1']);
        $object->setWord2($formData['word2']);
        
        $form->submit($formData);
        
        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($object, $form->getData());
        
        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }
    }
}