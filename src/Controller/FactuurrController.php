<?php

namespace App\Controller;

use App\Entity\Factuurr;
use App\Form\FactuurrType;
use App\Repository\FactuurrRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/factuurr")
 */
class FactuurrController extends AbstractController
{
    /**
     * @Route("/", name="factuurr_index", methods={"GET"})
     */
    public function index(FactuurrRepository $factuurrRepository): Response
    {
        return $this->render('factuurr/index.html.twig', [
            'factuurrs' => $factuurrRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="factuurr_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $factuurr = new Factuurr();
        $form = $this->createForm(FactuurrType::class, $factuurr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($factuurr);
            $entityManager->flush();

            return $this->redirectToRoute('factuurr_index');
        }

        return $this->render('factuurr/new.html.twig', [
            'factuurr' => $factuurr,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="factuurr_show", methods={"GET"})
     */
    public function show(Factuurr $factuurr): Response
    {
        return $this->render('factuurr/show.html.twig', [
            'factuurr' => $factuurr,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="factuurr_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Factuurr $factuurr): Response
    {
        $form = $this->createForm(FactuurrType::class, $factuurr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('factuurr_index');
        }

        return $this->render('factuurr/edit.html.twig', [
            'factuurr' => $factuurr,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="factuurr_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Factuurr $factuurr): Response
    {
        if ($this->isCsrfTokenValid('delete'.$factuurr->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($factuurr);
            $entityManager->flush();
        }

        return $this->redirectToRoute('factuurr_index');
    }
}
