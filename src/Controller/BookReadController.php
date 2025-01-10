<?php

namespace App\Controller;

use App\Entity\BookRead;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BookReadController extends AbstractController
{
    private $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    #[Route('/book/read', name: 'book_read', methods: ['POST'])]
    public function saveBookRead(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        
        // Get all the form data

        $bookId      = $request->request->get('book_id');
        $description = $request->request->get('description');
        $rating      = $request->request->get('rating');
        $isRead      = $request->request->get('is_read') === '1';

        
        $user = $this->getUser(); // Get user via is CSRF Token

        if (!$user) {
            return new JsonResponse(['status' => 'error', 
                                     'message' => 'Vous devez être connecté pour effectuer cette action.'
                                    ]);
        }

        // Get the book entity related to the id in the form

        $book = $this->bookRepository->find($bookId);

        if (!$book) {
            return new JsonResponse(['status' => 'error', 
                                     'message' => 'Le livre sélectionné est introuvable.'
                                    ]);
        }

        // Créer une nouvelle instance de BookRead
        $bookRead = new BookRead();

        $books    = $this->bookRepository->findOneById($bookId);

        $bookRead ->setBook($books);

        $userId   = $user->getId();

        $bookRead ->setUserId($userId);             // Set the user id to the book read
        $bookRead ->setDescription($description);   // Set the description to the book read
        $bookRead ->setRating($rating);             // Set the rating to the book read
        $bookRead ->setRead($isRead);               // Set if the user is reading the book or has read it
        $bookRead ->setCreatedAt(new \DateTime());  // Current Datetime when the entity is created
        $bookRead ->setUpdatedAt(new \DateTime());  // Current Datetime when the entity is updated

        // Save to database
        $entityManager ->persist($bookRead);
        $entityManager ->flush();


        return new JsonResponse(['status' => 'success',
                                 'message' => 'Lecture enregistrée avec succès!'
                                ]);
    }
}
