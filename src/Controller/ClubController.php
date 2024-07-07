<?php

namespace App\Controller;

use App\Repository\ClubRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClubController extends AbstractController
{
    /**
     * @Route("/club", name="app_club")
     */
    public function list(ClubRepository $clubRepository): Response
    {
        $clubs = $clubRepository->findAll();
        
        return $this->render('club/list.html.twig', [
            'controller_name' => 'clubController',
            'clubs' => $clubs
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
}
