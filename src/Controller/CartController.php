<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class GuidesController
 * @package App\Controller
 * @Route ("/cart")
 */
class CartController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/", name="cart_index")
     */
    public function index(): Response
    {
       return $this->render('public/cart.html.twig');
    }
}