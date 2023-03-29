<?php

namespace App\Repository;

use App\Entity\ActionType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ActionTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActionType::class);
    }

    // Vous pouvez ajouter des méthodes personnalisées pour interagir avec les types d'actions.
}
