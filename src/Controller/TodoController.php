<?php

namespace App\Controller;

use App\Entity\Todo;
use App\Form\TodoType;
use App\Repository\TodoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends AbstractController
{
    /**
     * @Route("/todo", name="todo_index", methods={"GET"})
     */
    public function index(TodoRepository $todoRepository): Response
    {
      return $this->render('todo/index.html.twig', [
        'todos' => $todoRepository->findAll(),
    ]);
}

// Ajoutez ici les autres méthodes pour gérer les todos (create, edit, delete, mark as done, etc.)
}

