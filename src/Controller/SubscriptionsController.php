<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class GuidesController
 * @package App\Controller
 * @Route ("/subscriptions")
 */
class SubscriptionsController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/", name="subscriptions_index")
     */
    public function index(): Response
    {
       return $this->render('public/subscriptions.html.twig');
    }
}