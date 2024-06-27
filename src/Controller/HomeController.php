<?php

// Le dossier virtuel "App" fait référence au dossier physique "src"
// Merci à l'autoloader de Composer
namespace App\Controller;

use App\Repository\CountryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     *
     */
    public function home(CountryRepository $countryRepository): Response
    {
        $countries = $countryRepository->findAll();
        
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'countries' => $countries
        ]);
    }
}