<?php

namespace App\Controller;


use App\Repository\TemoignageRepository;
use App\Repository\AnnonceRepository;
use App\Repository\HorraireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(HorraireRepository $horraireRepository, TemoignageRepository $temoignageRepository): Response
    {
        $user = $this->getUser();
        return $this->render('page/home.html.twig', [
            'controller_name' => 'HomePageController',
            'horraires' => $horraireRepository->findAll(),
            'temoignages' => $temoignageRepository->findAll(),
            'user' => $user
        ]);
    }

    #[Route('/boutique', name: 'home_boutique')]
    public function boutique(HorraireRepository $horraireRepository, AnnonceRepository $annonceRepository): Response
    {
        return $this->render('page/boutique.html.twig', [
            'controller_name' => 'HomePageController',
            'horraires' => $horraireRepository->findAll(),
            'annonces' => $annonceRepository->findAll()
        ]);
    }

    #[Route('boutique/{id}', name: 'app_annonce_show', methods: ['GET'])]
    public function show(HorraireRepository $horraireRepository, AnnonceRepository $annonceRepository, $id): Response
    {
        return $this->render('page/annonce.html.twig', [
            'annonce' => $annonceRepository->find($id),
            'horraires' => $horraireRepository->findAll()
        ]);
    }
}
