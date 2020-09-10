<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class GuidesController
 * @package App\Controller
 * @Route ("/cgu")
 */
class CguController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/", name="cgu_index")
     */
    public function index(): Response
    {
       return $this->render('public/cgu.html.twig');
    }
}