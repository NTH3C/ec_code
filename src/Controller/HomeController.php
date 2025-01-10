<?php

namespace App\Controller;

use App\Repository\BookReadRepository;
use App\Repository\BookRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    private BookReadRepository $readBookRepository;
    private BookRepository $bookRepository;
    private CategoryRepository $categoryRepository;

    public function __construct(
        BookReadRepository $bookReadRepository, 
        BookRepository $bookRepository, 
        CategoryRepository $categoryRepository
    ) {
        $this->readBookRepository = $bookReadRepository;
        $this->bookRepository = $bookRepository;
        $this->categoryRepository = $categoryRepository;
    }

    #[Route('/', name: 'app.home')]
    public function index(): Response
    {
        $books = $this->bookRepository->findAll();
        $user = $this->getUser();

        if ($user !== null) {
            $userId = $user->getId();
            $booksRead = $this->readBookRepository->findByUserId($userId, true);
            $booksReading = $this->readBookRepository->findByUserId($userId, false);

            // Compute unique categories and count books read per category
            $categories = [];
            foreach ($books as $book) {
                $categoryId = $book->getCategoryId(); // Récupère l'ID de la catégorie à partir de Book
                if (!isset($categories[$categoryId])) {
                    // Récupère le nom de la catégorie via son ID
                    $category = $this->categoryRepository->find($categoryId);
                    if ($category) {
                        $categories[$categoryId] = $category->getName();
                    }
                }
            }

            // Comptabilise le nombre de livres lus par catégorie
            $booksReadCountByCategory = array_map(function ($categoryId) use ($booksRead) {
                return count(array_filter($booksRead, function ($bookRead) use ($categoryId) {
                    $book = $bookRead->getBook(); // Accède à l'entité Book via BookRead
                    return $book && $book->getCategoryId() === $categoryId;
                }));
            }, array_keys($categories));

            
        } else {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('pages/home.html.twig', [
            'user' => $user,
            'books' => $books,
            'booksRead' => $booksRead,
            'booksReading' => $booksReading,
            'categories' => array_values($categories), // Pass unique category names
            'booksReadCountByCategory' => $booksReadCountByCategory, // Pass count data
            'name' => 'Accueil',
        ]);
    }
}
