<?php

namespace App\Controller;

use App\Entity\BookRead;
use App\Repository\BookRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;


class BookReadController extends AbstractController
{
    private $bookRepository;
    
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    #[Route('/book/read', name: 'book_read', methods: ['GET', 'POST'])]
    public function saveBookRead(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les livres pour le formulaire
        $books = $this->bookRepository->findAll();

        if ($request->isMethod('POST')) {
            // Récupérer les données du formulaire
            $bookId = $request->request->get('book_id');
            $description = $request->request->get('description');
            $rating = $request->request->get('rating');
            $isRead = $request->request->get('is_read') === '1';

            // Vérifier l'utilisateur connecté
            $user = $this->getUser();
            if (!$user) {
                $this->addFlash('error', 'Vous devez être connecté pour effectuer cette action.');
                return $this->redirectToRoute('book_read');
            }

            $userId = $user->getId();

            // Récupérer l'entité Book correspondante
            $book = $this->bookRepository->find($bookId);
            if (!$book) {
                $this->addFlash('error', 'Le livre sélectionné est introuvable.');
                return $this->redirectToRoute('book_read');
            }

            // Créer une nouvelle instance de BookRead
            $bookRead = new BookRead();
            $bookRead->setBookId($bookId); // Si BookRead utilise un ID
            $bookRead->setUserId($userId);     // Associe l'utilisateur connecté
            $bookRead->setDescription($description);
            $bookRead->setRating($rating);
            $bookRead->setRead($isRead);
            $bookRead->setCreatedAt(new \DateTime());
            $bookRead->setUpdatedAt(new \DateTime());



            // Sauvegarder dans la base de données
            $entityManager->persist($bookRead);
            $entityManager->flush();

            $this->addFlash('success', 'Votre lecture a été enregistrée avec succès!');
            return $this->redirectToRoute('app.home');
        }

        // Rendre le formulaire sur la page d'accueil
        return $this->render('pages/home.html.twig', [
            'books' => $books,
        ]);
    }
}
