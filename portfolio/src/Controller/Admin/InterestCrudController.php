<?php

namespace App\Controller\Admin;

use App\Entity\Interest;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InterestCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Interest::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}