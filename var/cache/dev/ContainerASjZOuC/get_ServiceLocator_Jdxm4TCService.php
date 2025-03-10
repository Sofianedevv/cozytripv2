<?php

namespace ContainerASjZOuC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jdxm4TCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jdxm4TC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jdxm4TC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repoRes' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'repoRes' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
