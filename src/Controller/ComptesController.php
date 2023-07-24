<?php

namespace App\Controller;

use App\Entity\Comptes;
use App\Form\ComptesType;
use App\Repository\ComptesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/comptes')]
class ComptesController extends AbstractController
{
    #[Route('/', name: 'app_comptes_index', methods: ['GET'])]
    public function index(ComptesRepository $comptesRepository): Response
    {
        return $this->render('comptes/index.html.twig', [
            'comptes' => $comptesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_comptes_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ComptesRepository $comptesRepository): Response
    {
        $compte = new Comptes();
        $form = $this->createForm(ComptesType::class, $compte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comptesRepository->save($compte, true);

            return $this->redirectToRoute('app_comptes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('comptes/new.html.twig', [
            'compte' => $compte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_comptes_show', methods: ['GET'])]
    public function show(Comptes $compte): Response
    {
        return $this->render('comptes/show.html.twig', [
            'compte' => $compte,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_comptes_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Comptes $compte, ComptesRepository $comptesRepository): Response
    {
        $form = $this->createForm(ComptesType::class, $compte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comptesRepository->save($compte, true);

            return $this->redirectToRoute('app_comptes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('comptes/edit.html.twig', [
            'compte' => $compte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_comptes_delete', methods: ['POST'])]
    public function delete(Request $request, Comptes $compte, ComptesRepository $comptesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$compte->getId(), $request->request->get('_token'))) {
            $comptesRepository->remove($compte, true);
        }

        return $this->redirectToRoute('app_comptes_index', [], Response::HTTP_SEE_OTHER);
    }
}
