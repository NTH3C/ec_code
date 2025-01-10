<?php

namespace App\Controller;

use App\Entity\BookRead;
use App\Repository\BookRepository;
use App\Repository\BookReadRepository;
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
        // // Vérifier si la requête est AJAX
        // if (!$request->isXmlHttpRequest()) {
        //     return new JsonResponse(['status' => 'error', 'message' => 'Requête invalide.'], 400);
        // }

        // Récupérer les données du formulaire
        $bookId = $request->request->get('book_id');
        $description = $request->request->get('description');
        $rating = $request->request->get('rating');
        $isRead = $request->request->get('is_read') === '1';

        // Vérifier l'utilisateur connecté
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['status' => 'error', 'message' => 'Vous devez être connecté pour effectuer cette action.']);
        }

        // Récupérer l'entité Book correspondante
        $book = $this->bookRepository->find($bookId);
        if (!$book) {
            return new JsonResponse(['status' => 'error', 'message' => 'Le livre sélectionné est introuvable.']);
        }

        // Créer une nouvelle instance de BookRead
        $bookRead = new BookRead();
        $bookRead->setBookId($bookId);

        $userId   = $user->getId();

        $bookRead->setUserId($userId);
        $bookRead->setDescription($description);
        $bookRead->setRating($rating);
        $bookRead->setRead($isRead);
        $bookRead->setCreatedAt(new \DateTime());
        $bookRead->setUpdatedAt(new \DateTime());

        // Sauvegarder dans la base de données
        $entityManager->persist($bookRead);
        $entityManager->flush();


        return new JsonResponse(['status' => 'success',
                                 'message' => 'Lecture enregistrée avec succès!']);
    }
}
