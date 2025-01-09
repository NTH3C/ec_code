<?php

namespace App\Controller;

use App\Repository\BookReadRepository;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    private BookReadRepository $readBookRepository;
    private BookRepository $bookRepository;

    // Inject the repository via the constructor
    public function __construct(BookReadRepository $bookReadRepository, BookRepository $bookRepository)
    {
        $this->readBookRepository = $bookReadRepository;
        $this->bookRepository = $bookRepository;
    }


    #[Route('/', name: 'app.home')]
    public function index(): Response
    {
        $books = $this->bookRepository->findAll();
        $userId     = 1;  // L'ID de l'utilisateur, à ajuster selon le contexte
        $booksRead  = $this->readBookRepository->findByUserId($userId, false);  // Récupère les livres lus par l'utilisateur

        // Render the 'home.html.twig' template
        return $this->render('pages/home.html.twig', [
            'books'     => $books,
            'booksRead' => $booksRead,  // Passe les livres lus à la vue
            'name'      => 'Accueil',    // Passe un nom à la vue
        ]);
    }
}
