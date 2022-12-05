<?php

namespace App\Controller\EasyAdmin;

use App\Entity\Person;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PersonCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Person::class;
    }

    //Uncomment me to see broken form
    //public function configureFields(string $pageName): iterable
    //{
    //    yield TextField::new('preference');
    //}
}
