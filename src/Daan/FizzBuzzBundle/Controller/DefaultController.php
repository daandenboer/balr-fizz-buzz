<?php
namespace Daan\FizzBuzzBundle\Controller;

use Daan\FizzBuzzBundle\Service\FizzBuzzService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Templating\EngineInterface;
use Daan\FizzBuzzBundle\Form\Type\FizzBuzzType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
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
     */
    public function __construct(
        EngineInterface $templating,
        FizzBuzzService $fizzBuzzService
    ) {
        $this->templating = $templating;
        $this->fizzBuzzService = $fizzBuzzService;
    }

    /**
     * This is a method description
     * 
     * @param Request $request This is a request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(FizzBuzzType::class);
        
        $fizzBuzz = null;
        
        $resetbutton = $form->get('reset');
        
        if ($form->handleRequest($request)->isValid()) {
            $fizzBuzzSettings = $form->getData();
            $fizzBuzz = $this->fizzBuzzService->makeFizzBuzz($fizzBuzzSettings);
        }
        
        if ($resetbutton->isClicked()) {
            $form = $this->createForm(FizzBuzzType::class);
            $fizzBuzz = $this->fizzBuzzService->makeFizzBuzz();
        }
        
             
        $content = $this->templating->render('DaanFizzBuzzBundle:Default:index.html.twig', [
            'fizz_buzz' => $fizzBuzz,
            'form' => $form->createView()
        ]);

        return new Response($content);
    }
    
    public function customRangeAction($start, $end)
    {
        $fizzBuzz = $this->fizzBuzzService->makeFizzBuzz($start, $end);
        $content = $this->templating->render('DaanFizzBuzzBundle:Default:index.html.twig', [
            'fizz_buzz' => $fizzBuzz
        ]);
        
        return new Response($content);
    }
}
