<?php

declare(strict_types=1);

namespace App\EntityListener;

use App\Entity\Product;
use App\Service\MyService;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;

#[AsEntityListener]
class My1EntityListener
{

    public function __construct(MyService $service) {}

}
