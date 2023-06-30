<?php

namespace ContainerJ8707xH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UMRItaEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uMRItaE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uMRItaE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'remboursement' => ['privates', '.errored..service_locator.uMRItaE.App\\Entity\\Remboursements', NULL, 'Cannot autowire service ".service_locator.uMRItaE": it needs an instance of "App\\Entity\\Remboursements" but this type has been excluded in "config/services.yaml".'],
            'remboursementsRepository' => ['privates', 'App\\Repository\\RemboursementsRepository', 'getRemboursementsRepositoryService', true],
        ], [
            'remboursement' => 'App\\Entity\\Remboursements',
            'remboursementsRepository' => 'App\\Repository\\RemboursementsRepository',
        ]);
    }
}
