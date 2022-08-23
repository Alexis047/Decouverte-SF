<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
/*
1 - CREER UN NOUVEAU PROJET SYMFONY (6) 
2 - OUVRIR LE PROJET DANS VS CODE
3 - AFFICHER UNE PAGE HTML, AVEC UN TITRE H1 ET CE MESSAGE : BIENVENUE DANS L'INITIATION A SYMFONY !
*/