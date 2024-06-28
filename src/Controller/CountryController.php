<?php

namespace App\Controller;

use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CountryController extends AbstractController
{
    /**
     * @Route("/countries", name="app_countries")
     */
    public function index(CountryRepository $countryRepository): Response
    {
        $countries = $countryRepository->findAll();
        
        return $this->render('country/list.html.twig', [
            'controller_name' => 'CountryController',
            'countries' => $countries
        ]);
    }
}
