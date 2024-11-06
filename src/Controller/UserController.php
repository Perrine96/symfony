<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(): Response
    {
        $users = [
            ['nom' => 'Dupont', 'prenom' => 'Paul', 'age' => 25, 'profession' => 'ingénieur'],
            ['nom' => 'Smith', 'prenom' => 'Maude', 'age' => 34, 'profession' => 'manager'], 
            ['nom' => 'Jones', 'prenom' => 'Michael', 'age' => 45, 'profession' => 'informaticien'],
        ];

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }
}
