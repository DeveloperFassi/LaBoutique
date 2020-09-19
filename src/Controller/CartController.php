<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpClient\Internal\ClientState;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cart")
 */
class CartController extends AbstractController
{
    /**
     * @param ProductRepository $productRepository
     * @param SessionInterface $session
     * @Route("/", name="cart_index")
     */
    public function index(ProductRepository $productRepository, SessionInterface $session)
    {
        $cart = $session->get('cart');

        $cartToDisplay = [];
        $total = 0;
        foreach ($cart as $id => $quantity) {
            $product = $productRepository->find($id);
            $total += $product->getPrice() * $quantity;
            $cartToDisplay[] = [
                'product' => $product,
                'quantity' => $quantity,
            ];
        }


        return $this->render('cart/index.html.twig', [
            'cartToDisplay' => $cartToDisplay,
            'total' => $total
        ]);
    }


    /**
     * @param $id
     * @param SessionInterface $session
     * @Route("/add/{id}", name = "cart_add", methods = {"POST", "GET"})
     */
    public function add($id, SessionInterface $session)
    {
        $cart = $session->get('cart', []);

        if ($id != 0 && !empty($cart[$id])) {
            $cart[$id]++;
        } else if ($id != 0) {
            $cart[$id] = 1;
        } else {
            throw new Exception('Id can\'t be 0');
        }
        $session->set('cart', $cart);
        return $this->redirectToRoute('cart_index');
    }

    public function updateCart(SessionInterface $session)
    {

    }
}
