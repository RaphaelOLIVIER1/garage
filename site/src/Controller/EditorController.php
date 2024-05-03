<?php

namespace App\Controller;

use App\Repository\HorraireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/moderation')]
class EditorController extends AbstractController
{
    #[Route('/', name: 'app_editor')]
    public function index(HorraireRepository $horraireRepository): Response
    {
        return $this->render('moderation/index.html.twig', [
            'horraires' => $horraireRepository->findAll()
        ]);
    }
}
