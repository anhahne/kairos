<?php

namespace App\Controller\Admin;

use App\Entity\LiturgicalDay;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LiturgicalDayCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LiturgicalDay::class;
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
