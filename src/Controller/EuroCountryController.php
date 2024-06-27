<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EuroCountryController extends AbstractController
{
    /**
     * @Route("/euro/countries", name="app_euro_country")
     */
    public function list(): Response
    {
        return $this->render('euro_country/list.html.twig', [
            'controller_name' => 'EuroCountryController',
        ]);
    }
}
