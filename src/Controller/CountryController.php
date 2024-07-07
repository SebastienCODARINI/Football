<?php

namespace App\Controller;

use App\Repository\ClubRepository;
use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CountryController extends AbstractController
{
    /**
     * @Route("/countries", name="app_countries")
     */
    public function list(CountryRepository $countryRepository): Response
    {
        $countries = $countryRepository->findAll();
        
        return $this->render('country/list.html.twig', [
            'controller_name' => 'CountryController',
            'countries' => $countries
        ]);
    }

    /**
     * @Route("/country/{id}", name="app_country_show")
     */
    public function show($id, CountryRepository $countryRepository, ClubRepository $clubRepository): Response
    {
        $country = $countryRepository->find($id);
        $countries = $countryRepository->findAll();
        $clubs = $clubRepository->findAll();

        if ($country === null) {
            return $this->render('errors/404.html.twig');
        }
        
        return $this->render('country/show.html.twig', [
            'controller_name' => 'CountryController',
            'countries' => $countries,
            'country' => $country,
            'clubs' => $clubs
        ]);
    }
}
