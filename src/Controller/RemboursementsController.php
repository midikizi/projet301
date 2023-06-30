<?php

namespace App\Controller;

use App\Entity\Remboursements;
use App\Form\RemboursementsType;
use App\Repository\RemboursementsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/remboursements')]
class RemboursementsController extends AbstractController
{
    #[Route('/', name: 'app_remboursements_index', methods: ['GET'])]
    public function index(RemboursementsRepository $remboursementsRepository): Response
    {
        return $this->render('remboursements/index.html.twig', [
            'remboursements' => $remboursementsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_remboursements_new', methods: ['GET', 'POST'])]
    public function new(Request $request, RemboursementsRepository $remboursementsRepository): Response
    {
        $remboursement = new Remboursements();
        $form = $this->createForm(RemboursementsType::class, $remboursement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $remboursementsRepository->save($remboursement, true);

            return $this->redirectToRoute('app_remboursements_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('remboursements/new.html.twig', [
            'remboursement' => $remboursement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_remboursements_show', methods: ['GET'])]
    public function show(Remboursements $remboursement): Response
    {
        return $this->render('remboursements/show.html.twig', [
            'remboursement' => $remboursement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_remboursements_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Remboursements $remboursement, RemboursementsRepository $remboursementsRepository): Response
    {
        $form = $this->createForm(RemboursementsType::class, $remboursement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $remboursementsRepository->save($remboursement, true);

            return $this->redirectToRoute('app_remboursements_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('remboursements/edit.html.twig', [
            'remboursement' => $remboursement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_remboursements_delete', methods: ['POST'])]
    public function delete(Request $request, Remboursements $remboursement, RemboursementsRepository $remboursementsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$remboursement->getId(), $request->request->get('_token'))) {
            $remboursementsRepository->remove($remboursement, true);
        }

        return $this->redirectToRoute('app_remboursements_index', [], Response::HTTP_SEE_OTHER);
    }
}
