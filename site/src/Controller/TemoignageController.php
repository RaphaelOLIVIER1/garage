<?php

namespace App\Controller;



use App\Repository\HorraireRepository;
use App\Entity\Temoignage;
use App\Form\TemoignageType;
use App\Repository\TemoignageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/temoignage')]
class TemoignageController extends AbstractController
{
    #[Route('/', name: 'app_temoignage_index', methods: ['GET'])]
    public function index(TemoignageRepository $temoignageRepository, HorraireRepository $horraireRepository): Response
    {
        return $this->render('temoignage/index.html.twig', [
            'temoignages' => $temoignageRepository->findAll(),
            'horraires' => $horraireRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_temoignage_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, HorraireRepository $horraireRepository): Response
    {
        $user = $this->getUser();
        $temoignage = new Temoignage();
        $form = $this->createForm(TemoignageType::class, $temoignage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($temoignage);
            $entityManager->flush();

            if ($user->getRoles('ROLE_EDITOR')) {
                return $this->redirectToRoute('app_home_page', [], Response::HTTP_SEE_OTHER);
            } elseif ($user->getRoles('ROLE_USER')) {
                return $this->redirectToRoute('app_temoignage_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('temoignage/new.html.twig', [
            'temoignage' => $temoignage,
            'form' => $form,
            'horraires' => $horraireRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_temoignage_show', methods: ['GET'])]
    public function show(Temoignage $temoignage, HorraireRepository $horraireRepository): Response
    {
        return $this->render('temoignage/show.html.twig', [
            'temoignage' => $temoignage,
            'horraires' => $horraireRepository->findAll(),

        ]);
    }

    #[Route('/{id}/edit', name: 'app_temoignage_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Temoignage $temoignage, EntityManagerInterface $entityManager, HorraireRepository $horraireRepository): Response
    {
        $form = $this->createForm(TemoignageType::class, $temoignage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_temoignage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('temoignage/edit.html.twig', [
            'temoignage' => $temoignage,
            'form' => $form,
            'horraires' => $horraireRepository->findAll(),

        ]);
    }

    #[Route('/{id}', name: 'app_temoignage_delete', methods: ['POST'])]
    public function delete(Request $request, Temoignage $temoignage, EntityManagerInterface $entityManager, HorraireRepository $horraireRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $temoignage->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($temoignage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_temoignage_index', [
            'horraires' => $horraireRepository->findAll(),

        ], Response::HTTP_SEE_OTHER);
    }
}
