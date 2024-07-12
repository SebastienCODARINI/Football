<?php

namespace App\Controller;

use App\Entity\Club;
use App\Entity\Country;
use App\Repository\ClubRepository;
use App\Repository\CountryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClubController extends AbstractController
{
    /**
     * @Route("/country{id}/clubs", name="app_club")
     */
    public function list($id,ClubRepository $clubRepository, CountryRepository $countryRepository): Response
    {
        $country = $countryRepository->find($id);
        $countries = $countryRepository->findAll();
        $clubs = $clubRepository->findBy([
            'country' => $country,]);

        

        if ($country === null) {
            return $this->render('errors/404.html.twig');
        }
        
        return $this->render('club/list.html.twig', [
            'controller_name' => 'CountryController',
            'controller_name' => 'ClubController',
            'countries' => $countries,
            'country' => $country,
            'clubs' => $clubs,
            
            
        ]);
    }

    /**
     * @Route("/club/{id}", name="app_club_show")
     */
    public function show($id, ClubRepository $clubRepository): Response
    {
        $club = $clubRepository->find($id);
        $clubs = $clubRepository->findAll();

        if ($club === null) {
            return $this->render('errors/404.html.twig');
        }
        
        return $this->render('club/show.html.twig', [
            'controller_name' => 'clubController',
            'clubs' => $clubs,
            'club' => $club
        ]);
    }

    // /**
    //  *@Route("/{country}/clubs", name="app_club")
    //  */
    // public function clubsByCountry($country, ClubRepository $clubRepository, CountryRepository $countryRepository): Response
    // {
    //     $country = $countryRepository->findAll();
    //     $clubs = $clubRepository->findByCountry($country);

    //     return $this->render('club/list.html.twig', [
    //         'clubs' => $clubs,
    //         'country' => $country,
    //     ]);
    // }
}
