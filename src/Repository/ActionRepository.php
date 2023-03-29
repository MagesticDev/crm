<?php

namespace App\Repository;

use App\Entity\Action;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ActionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Action::class);
    }

    // Vous pouvez ajouter des méthodes personnalisées pour interagir avec les actions.
}
