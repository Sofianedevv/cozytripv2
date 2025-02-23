<?php

namespace Container8wxDNiv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PL5_CRoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pL5.cRo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pL5.cRo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\HerbergementRepository', 'getHerbergementRepositoryService', true],
            'repoCat' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\HerbergementRepository',
            'repoCat' => 'App\\Repository\\CategorieRepository',
        ]);
    }
}
