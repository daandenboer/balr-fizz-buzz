<?php
namespace Daan\FizzBuzzBundle\Controller;

use Daan\FizzBuzzBundle\Service\FizzBuzzService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Templating\EngineInterface;

class DefaultController
{

    /**
     * @var EngineInterface
     */
    private $templating;

    /**
     * @var FizzBuzzService
     */
    private $fizzBuzzService;

    /**
     * DefaultController constructor.
     * @param EngineInterface $templating
     * @param FizzBuzzService $fizzBuzzService
     */
    public function __construct(
        EngineInterface $templating,
        FizzBuzzService $fizzBuzzService
    ) {
        $this->templating = $templating;
        $this->fizzBuzzService = $fizzBuzzService;
    }

    public function indexAction(Request $request)
    {
        $fizzBuzz = $this->fizzBuzzService->makeFizzBuzz();
        $content = $this->templating->render('DaanFizzBuzzBundle:Default:index.html.twig', [
            'fizz_buzz' => $fizzBuzz
        ]);

        return new Response($content);
    }
    
    public function customRangeAction($start, $end)
    {
        $fizzBuzz = $this->fizzBuzzService->makeFizzBuzz();
        $replacement = array_splice($fizzBuzz, $start - 1, $end - $start + 1);
        $content = $this->templating->render('DaanFizzBuzzBundle:Default:index.html.twig', [
            'fizz_buzz' => $replacement
        ]);
        
        return new Response($content);
    }
}
