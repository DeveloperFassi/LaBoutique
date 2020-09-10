<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class GuidesController
 * @package App\Controller
 * @Route ("/guides")
 */
class GuidesController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/", name="guides_index")
     */
    public function index(): Response
    {
       return $this->render('public/guides.html.twig');
    }
}