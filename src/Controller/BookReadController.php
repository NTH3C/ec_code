<?php

namespace App\Controller;

use App\Entity\BookRead;
use App\Form\BookReadFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookReadController extends AbstractController
{
    /**
     * @Route("/book/read", name="book_read")
     */
    public function saveBookRead(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Créer une nouvelle instance de BookRead
        $bookRead = new BookRead();

        // Créer le formulaire
        $form = $this->createForm(BookReadFormType::class, $bookRead);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);

        // Vérifier si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les données du formulaire
            $bookRead = $form->getData();

            // Enregistrer l'entité dans la base de données
            $entityManager->persist($bookRead);
            $entityManager->flush();

            // Message de succès
            $this->addFlash('success', 'Votre lecture a été enregistrée avec succès!');

            // Rediriger vers une autre page ou afficher un message
            return $this->redirectToRoute('book_read'); // ou une autre route de votre choix
        }

        // Afficher le formulaire dans la vue
        return $this->render('pages/home.html.twig', [
            'BookReadForm' => $form->createView(),
        ]);
    }
}
