<?php

declare(strict_types=1);

namespace App\EntityListener;

use App\Service\MyService;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;

#[AsEntityListener]
class My2EntityListener
{

    public function __construct(MyService $service) {}

}
