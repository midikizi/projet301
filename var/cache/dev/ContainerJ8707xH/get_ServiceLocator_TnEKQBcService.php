<?php

namespace ContainerJ8707xH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TnEKQBcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TnEKQBc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TnEKQBc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'compte' => ['privates', '.errored..service_locator.TnEKQBc.App\\Entity\\Comptes', NULL, 'Cannot autowire service ".service_locator.TnEKQBc": it needs an instance of "App\\Entity\\Comptes" but this type has been excluded in "config/services.yaml".'],
            'comptesRepository' => ['privates', 'App\\Repository\\ComptesRepository', 'getComptesRepositoryService', true],
        ], [
            'compte' => 'App\\Entity\\Comptes',
            'comptesRepository' => 'App\\Repository\\ComptesRepository',
        ]);
    }
}
