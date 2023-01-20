<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('/home/cv.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
    #[Route('/loisir', name: 'app_loisir')]
    public function loisir(): Response
    {
        return $this->render('/home/loisir.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
    #[Route('/competence', name: 'app_competence')]
    public function competence(): Response
    {
        return $this->render('/home/competence.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
}
