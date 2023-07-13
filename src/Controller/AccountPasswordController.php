<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AccountPasswordController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Affiche le formulaire de modification du mot de passe de l'utilisateur
     */
    #[Route('/compte/modifier-mon-mot-de-passe', name: 'app_account_password')]
    public function index(Request $request, UserPasswordHasherInterface $encoder): Response
    {
        // Notification initialement vide
        $notification = null;

        // Récupère l'utilisateur actuel
        $user = $this->getUser();

        // Crée le formulaire ChangePasswordType et l'associe à l'utilisateur
        $form = $this->createForm(ChangePasswordType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupère l'ancien mot de passe saisi dans le formulaire
            $old_pwd = $form->get('old_password')->getData();

            if ($encoder->isPasswordValid($user, $old_pwd)) {
                // Récupère le nouveau mot de passe saisi dans le formulaire
                $new_pwd = $form->get('new_password')->getData();
                
                // Hash le nouveau mot de passe
                $password = $encoder->hashPassword($user, $new_pwd);

                // Met à jour le mot de passe de l'utilisateur
                $user->setPassword($password);
                $this->entityManager->flush();

                // Met à jour la notification avec un message de succès
                $notification = "Votre mot de passe a bien été mis à jour.";
            } else {
                // Met à jour la notification avec un message d'erreur
                $notification = "Votre mot de passe actuel n'est pas le bon";
            }
        }

        return $this->render('account/password.html.twig', [
            'form' => $form->createView(),
            'notification' => $notification
        ]);
    }
}
