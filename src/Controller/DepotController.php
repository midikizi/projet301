<?php

namespace App\Controller;

use App\Entity\Depot;
use App\Form\DepotType;
use App\Repository\DepotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comptes;

#[Route('/depot')]
class DepotController extends AbstractController
{
    #[Route('/', name: 'app_depot_index', methods: ['GET'])]
    public function index(DepotRepository $depotRepository): Response
    {
        return $this->render('depot/index.html.twig', [
            'depots' => $depotRepository->findAll(),
        ]);
    }




    #[Route('/new', name: 'app_depot_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DepotRepository $depotRepository): Response
    {
        $depot = new Depot();
        $form = $this->createForm(DepotType::class, $depot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $depotRepository->save($depot, true);

            return $this->redirectToRoute('app_depot_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('depot/new.html.twig', [
            'depot' => $depot,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_depot_show', methods: ['GET'])]
    public function show(Depot $depot): Response
    {
        return $this->render('depot/show.html.twig', [
            'depot' => $depot,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_depot_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Depot $depot, DepotRepository $depotRepository): Response
    {
        $form = $this->createForm(DepotType::class, $depot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $depotRepository->save($depot, true);

            return $this->redirectToRoute('app_depot_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('depot/edit.html.twig', [
            'depot' => $depot,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_depot_delete', methods: ['POST'])]
    public function delete(Request $request, Depot $depot, DepotRepository $depotRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$depot->getId(), $request->request->get('_token'))) {
            $depotRepository->remove($depot, true);
        }

        return $this->redirectToRoute('app_depot_index', [], Response::HTTP_SEE_OTHER);
    }
}
