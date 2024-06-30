<?php

namespace App\Controller;

use App\Repository\CountryRepository;
use App\Repository\EuroCountryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EuroCountryController extends AbstractController
{
    /**
     * @Route("/euro_countries", name="app_euro_country")
     */
    public function list(EuroCountryRepository $EuroCountryRepository, CountryRepository $CountryRepository): Response
    {
        $eurocountries = $EuroCountryRepository->findAll();
        $countries = $CountryRepository->findAll();
        
        return $this->render('euro_country/list.html.twig', [
            'controller_name' => 'EuroCountryController',
            'eurocountries' => $eurocountries,
            'countries' => $countries
        ]);
    }
}
