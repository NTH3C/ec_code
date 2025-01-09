<?php

namespace App\Controller;

use App\Entity\BookRead;
use App\Form\BookReadFormType;
use App\Repository\BookReadRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private BookReadRepository $bookReadRepository;

    // Inject the repository via the constructor
    public function __construct(BookReadRepository $bookReadRepository)
    {
        $this->bookReadRepository = $bookReadRepository;
    }

    #[Route('/', name: 'app.home')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'utilisateur connecté (remplacez "1" par votre logique d'utilisateur connecté)
        $userId = 1;

        // Récupérer les livres lus par l'utilisateur
        $booksRead = $this->bookReadRepository->findByUserId($userId, false);

        // Créer une nouvelle entité BookRead
        $bookRead = new BookRead();

        // Créer le formulaire
        $form = $this->createForm(BookReadFormType::class, $bookRead);

        // Gérer la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Ajouter l'utilisateur à l'entité (si nécessaire)
            $bookRead->setUserId($userId);

            // Sauvegarder l'entité dans la base de données
            $entityManager->persist($bookRead);
            $entityManager->flush();

            // Ajouter un message flash
            $this->addFlash('success', 'Votre lecture a été enregistrée avec succès!');

            // Rediriger pour éviter la soumission multiple
            return $this->redirectToRoute('app.home');
        }

        // Rendre le template avec le formulaire et les données
        return $this->render('pages/home.html.twig', [
            'BookReadForm' => $form->createView(),
            'booksRead'    => $booksRead,
            'name'         => 'Accueil',
        ]);
    }
}
