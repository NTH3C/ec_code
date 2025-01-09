<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BookReadingController extends AbstractController
{
    #[Route('/book/reading', name: 'app_book_reading')]
    public function index(): Response
    {



        return $this->render('home/booksReading.html.twig', [
        ]);
    }
}
