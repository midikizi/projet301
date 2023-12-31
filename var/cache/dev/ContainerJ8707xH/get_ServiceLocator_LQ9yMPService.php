<?php

namespace ContainerJ8707xH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LQ9yMPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.L_Q9yMP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.L_Q9yMP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'tontine' => ['privates', '.errored..service_locator.L_Q9yMP.App\\Entity\\Tontines', NULL, 'Cannot autowire service ".service_locator.L_Q9yMP": it needs an instance of "App\\Entity\\Tontines" but this type has been excluded in "config/services.yaml".'],
            'tontinesRepository' => ['privates', 'App\\Repository\\TontinesRepository', 'getTontinesRepositoryService', true],
        ], [
            'tontine' => 'App\\Entity\\Tontines',
            'tontinesRepository' => 'App\\Repository\\TontinesRepository',
        ]);
    }
}
