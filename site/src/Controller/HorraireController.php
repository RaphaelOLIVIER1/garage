<?php

namespace App\Controller;

use App\Entity\Horraire;
use App\Form\HorraireType;
use App\Repository\HorraireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;






#[Route('/admin')]
class HorraireController extends AbstractController
{
    #[Route('/', name: 'app_horraire_index', methods: ['GET'])]
    public function index(HorraireRepository $horraireRepository): Response
    {
        return $this->render('admin/index.html.twig', [
            'horraires' => $horraireRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_horraire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, HorraireRepository $horraireRepository): Response
    {
        $horraire = new Horraire();
        $form = $this->createForm(HorraireType::class, $horraire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($horraire);
            $entityManager->flush();

            return $this->redirectToRoute('app_horraire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/horraire/new.html.twig', [
            'horraire' => $horraire,
            'form' => $form,
            'horraires' => $horraireRepository->findAll()
        ]);
    }

    #[Route('/{id}', name: 'app_horraire_show', methods: ['GET'])]
    public function show(Horraire $horraire, HorraireRepository $horraireRepository): Response
    {
        return $this->render('admin/horraire/show.html.twig', [
            'horraire' => $horraire,
            'horraires' => $horraireRepository->findAll()
        ]);
    }

    #[Route('/{id}/edit', name: 'app_horraire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Horraire $horraire, EntityManagerInterface $entityManager, HorraireRepository $horraireRepository): Response
    {
        $form = $this->createForm(HorraireType::class, $horraire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_horraire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/horraire/edit.html.twig', [
            'horraire' => $horraire,
            'form' => $form,
            'horraires' => $horraireRepository->findAll()
        ]);
    }

    #[Route('/{id}', name: 'app_horraire_delete', methods: ['POST'])]
    public function delete(Request $request, Horraire $horraire, EntityManagerInterface $entityManager, HorraireRepository $horraireRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $horraire->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($horraire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_horraire_index', ['horraires' => $horraireRepository->findAll()], Response::HTTP_SEE_OTHER);
    }
}
