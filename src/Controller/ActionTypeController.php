<?php

namespace App\Controller;

use App\Entity\ActionType;
use App\Form\ActionTypeType;
use App\Repository\ActionTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActionTypeController extends AbstractController
{
    /**
     * @Route("/action-type", name="action_type_index", methods={"GET"})
     */
    public function index(ActionTypeRepository $actionTypeRepository): Response
    {
        return $this->render('action_type/index.html.twig', [
            'action_types' => $actionTypeRepository->findAll(),
        ]);
    }

    // Ajoutez ici les autres méthodes pour gérer les types d'actions (create, edit, delete, etc.)
}
