<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/connexion', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Vérifier si l'utilisateur est déjà connecté, si oui, rediriger vers la page du compte
        if ($this->getUser()) {
            return $this->redirectToRoute('app_account');
        }

        // Récupérer les erreurs de connexion, le cas échéant
        $error = $authenticationUtils->getLastAuthenticationError();
        // Récupérer le dernier nom d'utilisateur saisi par l'utilisateur
        $lastUsername = $authenticationUtils->getLastUsername();

        // Afficher le formulaire de connexion avec les informations nécessaires
        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/deconnexion', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('Cette méthode peut être vide - elle sera interceptée par la clé de déconnexion de votre pare-feu.');
    }
}

