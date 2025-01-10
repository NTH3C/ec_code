<?php

namespace App\Controller;

use App\Repository\BookReadRepository;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
            $userId       = $user->getId();    
            $booksRead    = $this->readBookRepository->findByUserId($userId, true); 
            $booksReading = $this->readBookRepository->findByUserId($userId, false);
        }

        else {
            return $this->redirectToRoute('app_login');
        }


        // Render the 'home.html.twig' template
        return $this->render('pages/home.html.twig', [
            'user'         =>$user,          // Connected User
            'books'        => $books,        // All the database books
            'booksRead'    => $booksRead,    // All the book that the current user read
            'booksReading' => $booksReading, // All the book that the current user is reading
            'name'         => 'Accueil',     // Give a name to the vue
        ]);
    }
}
