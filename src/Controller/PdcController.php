<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PdcController extends AbstractController
{
    #[Route('/pdc', name: 'app_pdc')]
    public function index(): Response
    {
        return $this->render('pdc/index.html.twig');
    }
}
