<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearnMoreController extends AbstractController
{
    #[Route('/lear/more', name: 'app_learn_more')]
    public function index(): Response
    {
        return $this->render('learn_more/index.html.twig');
    }
}
