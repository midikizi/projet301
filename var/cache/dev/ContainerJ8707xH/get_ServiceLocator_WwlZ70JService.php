<?php

namespace ContainerJ8707xH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WwlZ70JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wwlZ70J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wwlZ70J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'comptesRepository' => ['privates', 'App\\Repository\\ComptesRepository', 'getComptesRepositoryService', true],
        ], [
            'comptesRepository' => 'App\\Repository\\ComptesRepository',
        ]);
    }
}
