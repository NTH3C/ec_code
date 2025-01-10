<?php


namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExplorerController extends AbstractController
{
    private BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    #[Route('/explorer', name: 'app.explorer')]
    public function explorer(): Response
    {
        // Récupérer tous les livres depuis la base de données
        $books = $this->bookRepository->findAll();

        // Renvoyer les livres à la vue 'explorer.html.twig'
        return $this->render('pages/explorer.html.twig', [
            'books' => $books,
            'name' => 'Explorer',
        ]);
    }
}
