<?php

namespace App\Controller;

use App\Entity\Horraire;
use App\Repository\HorraireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(HorraireRepository $horraireRepository): Response
    {
        return $this->render('page/home.html.twig', [
            'controller_name' => 'HomePageController',
            'horraires' => $horraireRepository->findAll(),
        ]);
    }

    #[Route('/boutique', name: 'home_boutique')]
    public function boutique(HorraireRepository $horraireRepository): Response
    {
        return $this->render('page/boutique.html.twig', [
            'controller_name' => 'HomePageController',
            'horraires' => $horraireRepository->findAll(),
        ]);
    }
}
