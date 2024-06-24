<?php

// Le dossier virtuel "App" fait référence au dossier physique "src"
// Merci à l'autoloader de Composer
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     *
     */
    public function index(): Response
    {
	// Si nous allons voir le code de la méthode render(),
        // nous verrons qu'elle renvoie bien un objet de type Response
	return $this->render('home/index.html.twig');
    }
}