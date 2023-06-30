<?php

namespace App\Classe;


use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;



class Cart
{
    private $session;
    private $entityManager;



    public function __construct(RequestStack $requestStack, EntityManagerInterface $entityManager)
    {
        $this->session = $requestStack->getSession(); // Correction #1 : On accède à la session via la méthode getSession()
        $this->entityManager = $entityManager;
    }

    public function add($id)
    {
        $cart = $this->session->get('cart', []); // Correction #2 : On récupère le panier courant ou un tableau vide s'il n'existe pas encore

        if (!empty($cart[$id])) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }
        // $cart[] = [ // Correction #3 : On ajoute un nouvel élément au tableau existant plutôt que de le remplacer en entier
        //   'id' => $id,
        // 'quantity' => 1,
        //];

        $this->session->set('cart', $cart); // Correction #4 : On sauvegarde le panier mis à jour
    }

    public function get()
    {
        return $this->session->get('cart', []); // Correction #5 : On retourne le panier courant ou un tableau vide s'il n'existe pas encore
    }

    public function remove()
    {
        $this->session->remove('cart'); // Correction #6 : On supprime le panier courant en entier
    }
    public function delete($id)
    {
        $cart = $this->session->get('cart', []);

        unset($cart[$id]);

        return $this->session->set('cart', $cart);
    }
    public function decrease($id)
    {
        //vérifier si la quantité de notre produit = 1
        $cart = $this->session->get('cart', []);
        if ($cart[$id] > 1) {
            $cart[$id]--;
        } else {
            unset($cart[$id]);
        }
        return $this->session->set('cart', $cart);
    }

    public function getFull()
    {
        $cartComplete = [];
        if ($this->get()) {
            foreach ($this->get() as $id => $quantity) {
                $product_object = $this->entityManager->getRepository(Product::class)->findOneById($id);
                if (!$product_object) {
                    $this->delete($id);
                    continue;
                }

                $cartComplete[] = [
                    'product' => $product_object,
                    'quantity' => $quantity

                ];
            }
        }
        return $cartComplete;
    }
}
