<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestFormController extends AbstractController
{
    #[Route('/test/form', name: 'app_test_form')]
    public function index(): Response
    {
        return $this->render('test_form/index.html.twig', [
            'controller_name' => 'TestFormController',
        ]);
    }
}
