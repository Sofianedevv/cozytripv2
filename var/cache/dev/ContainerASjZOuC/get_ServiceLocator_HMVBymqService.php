<?php

namespace ContainerASjZOuC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HMVBymqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hMVBymq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hMVBymq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hebergement' => ['privates', '.errored..service_locator.hMVBymq.App\\Entity\\Herbergement', NULL, 'Cannot autowire service ".service_locator.hMVBymq": it needs an instance of "App\\Entity\\Herbergement" but this type has been excluded in "config/services.yaml".'],
            'repoHeb' => ['privates', 'App\\Repository\\HerbergementRepository', 'getHerbergementRepositoryService', true],
            'repoRes' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'hebergement' => 'App\\Entity\\Herbergement',
            'repoHeb' => 'App\\Repository\\HerbergementRepository',
            'repoRes' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
