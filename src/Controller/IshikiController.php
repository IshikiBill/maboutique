<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IshikiController extends AbstractController
{
    #[Route('/ishiki', name: 'app_ishiki')]
    public function index(): Response
    {
        return $this->render('ishiki/index.html.twig');
    }
}
