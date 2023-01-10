<?php

declare(strict_types=1);

namespace App;

use App\Loop\CustomPass;
use App\Loop\DependencyInjection\AttributeFilterPass;
use App\Loop\DependencyInjection\FilterPass;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;


}
