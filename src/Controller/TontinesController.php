<?php

namespace App\Controller;

use App\Entity\Tontines;
use App\Form\TontinesType;
use App\Repository\TontinesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/tontines')]
class TontinesController extends AbstractController
{
    #[Route('/', name: 'app_tontines_index', methods: ['GET'])]
    public function index(TontinesRepository $tontinesRepository): Response
    {
        return $this->render('tontines/index.html.twig', [
            'tontines' => $tontinesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_tontines_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TontinesRepository $tontinesRepository): Response
    {
        $tontine = new Tontines();
        $form = $this->createForm(TontinesType::class, $tontine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tontinesRepository->save($tontine, true);

            return $this->redirectToRoute('app_tontines_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tontines/new.html.twig', [
            'tontine' => $tontine,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_tontines_show', methods: ['GET'])]
    public function show(Tontines $tontine): Response
    {
        return $this->render('tontines/show.html.twig', [
            'tontine' => $tontine,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tontines_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tontines $tontine, TontinesRepository $tontinesRepository): Response
    {
        $form = $this->createForm(TontinesType::class, $tontine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tontinesRepository->save($tontine, true);

            return $this->redirectToRoute('app_tontines_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tontines/edit.html.twig', [
            'tontine' => $tontine,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_tontines_delete', methods: ['POST'])]
    public function delete(Request $request, Tontines $tontine, TontinesRepository $tontinesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tontine->getId(), $request->request->get('_token'))) {
            $tontinesRepository->remove($tontine, true);
        }

        return $this->redirectToRoute('app_tontines_index', [], Response::HTTP_SEE_OTHER);
    }
}
