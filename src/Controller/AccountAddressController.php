<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Address;
use App\Form\AddressType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountAddressController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    /**
     * Affiche la page des adresses du compte
     */
    #[Route("/compte/adresses", name: 'app_account_address')]
    public function index(): Response
    {
        return $this->render('account/address.html.twig');
    }

    /**
     * Ajoute une nouvelle adresse au compte
     */
    #[Route("/compte/ajouter-une-adresse", name: 'app_account_address_add')]
    public function add(Cart $cart, Request $request): Response
    {
        // Crée un nouvel objet Address
        $address = new Address();
        
        // Crée le formulaire AddressType et l'associe à l'objet Address
        $form = $this->createForm(AddressType::class, $address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Lie l'adresse à l'utilisateur actuel
            $address->setUser($this->getUser());
            
            // Persiste l'adresse en base de données
            $this->entityManager->persist($address);
            $this->entityManager->flush();
            
            if ($cart->get()) {
                // Redirige vers la page de commande si le panier n'est pas vide
                return $this->redirectToRoute('app_order');
            } else {
                // Redirige vers la page des adresses si le panier est vide
                return $this->redirectToRoute('app_account_address');
            }
        }

        return $this->render('account/address_form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Modifie une adresse existante du compte
     */
    #[Route("/compte/modifier-une-adresse/{id}", name: 'app_account_address_edit')]
    public function edit(Request $request, $id): Response
    {
        // Récupère l'adresse à modifier en fonction de l'identifiant
        $address = $this->entityManager->getRepository(Address::class)->findOneById($id);

        if (!$address || $address->getUser() != $this->getUser()) {
            // Redirige vers la page des adresses si l'adresse n'existe pas ou n'appartient pas à l'utilisateur actuel
            return $this->redirectToRoute('app_account_address');
        }

        // Crée le formulaire AddressType et l'associe à l'adresse à modifier
        $form = $this->createForm(AddressType::class, $address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Persiste les modifications de l'adresse en base de données
            $this->entityManager->flush();
            
            // Redirige vers la page des adresses
            return $this->redirectToRoute('app_account_address');
        }

        return $this->render('account/address_form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Supprime une adresse du compte
     */
    #[Route("/compte/supprimer-une-adresse/{id}", name: 'app_account_address_delete')]
    public function delete($id)
    {
        // Récupère l'adresse à supprimer en fonction de l'identifiant
        $address = $this->entityManager->getRepository(Address::class)->findOneById($id);

        if ($address && $address->getUser() == $this->getUser()) {
            // Supprime l'adresse de la base de données
            $this->entityManager->remove($address);
            $this->entityManager->flush();
        }

        // Redirige vers la page des adresses
        return $this->redirectToRoute('app_account_address');
    }
}
