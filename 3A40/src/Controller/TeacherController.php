<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'name' => '3A40',
        ]);
    }

      #[Route('/test/{nom}', name: 'app_test')]
        public function test($nom): Response
        {
            return $this->render('teacher/test.html.twig',['n'=>$nom]);
        }
}
