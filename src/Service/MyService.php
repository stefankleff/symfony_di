<?php

declare(strict_types=1);

namespace App\Service;


use Doctrine\ORM\EntityManagerInterface;

class MyService
{
    public function __construct(EntityManagerInterface $entityManager) {}

}
