<?php

namespace App\Controller;

use App\Entity\BookRead;
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

        $books        = $this->bookRepository->findAll();
        $user         = $this->getUser();  
    
        if($user != null){
            $userId       = $user->getId();    // L'ID de l'utilisateur, à ajuster selon le contexte
            $booksRead    = $this->readBookRepository->findByUserId($userId, true); 
            $booksReading = $this->readBookRepository->findByUserId($userId, false);
            //dd($booksReading);
        }
        else {
            $booksRead    = null;
            $booksReading = null;
        }

        // Récupère les livres lus par l'utilisateur

        // Render the 'home.html.twig' template
        return $this->render('pages/home.html.twig', [
            'user'      =>$user,
            'books'     => $books,
            'booksRead' => $booksRead,  // Passe les livres lus à la vue
            'booksReading' => $booksReading,
            'name'      => 'Accueil',    // Passe un nom à la vue
        ]);
    }
}
