<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin_dashboard')]
    public function dashboard()
    {
        // Affiche le tableau de bord du Back-Office réservé à l'administrateur
        // Vous pouvez ajouter ici des liens vers les différentes pages de gestion des entités (projets, CV, etc.)
    }

    // Ajoutez ici les autres méthodes du contrôleur pour les opérations CRUD sur les différentes entités (projets, CV, etc.)
}
