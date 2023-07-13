<?php

namespace App\Controller;

use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountOrderController extends AbstractController
{
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager) 
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Affiche la liste des commandes de l'utilisateur
     */
    #[Route('/compte/mes-commandes', name: 'app_account_order')]
    public function index(): Response
    {
        // Récupère les commandes réussies de l'utilisateur courant
        $orders = $this->entityManager->getRepository(Order::class)->findSuccessOrders($this->getUser());

        return $this->render('account/order.html.twig', [
            'orders' => $orders, 
        ]);
    }

    /**
     * Affiche les détails d'une commande
     */
    #[Route('/compte/mes-commandes/{reference}', name: 'app_account_order_show')]
    public function show($reference): Response
    {
        // Récupère la commande en fonction de la référence
        $order = $this->entityManager->getRepository(Order::class)->findOneByReference($reference);

        if(!$order || $order->getUser() != $this->getUser()) {
            // Redirige vers la liste des commandes si la commande n'existe pas ou n'appartient pas à l'utilisateur
            return $this->redirectToRoute('app_account_order');
        }

        return $this->render('account/order_show.html.twig', [
            'order' => $order
        ]);
    }
}
