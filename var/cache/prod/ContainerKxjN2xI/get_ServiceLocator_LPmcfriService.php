<?php

namespace ContainerKxjN2xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LPmcfriService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.lPmcfri' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lPmcfri'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actionRepo' => ['privates', 'App\\Repository\\ActionRepository', 'getActionRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'actionRepo' => 'App\\Repository\\ActionRepository',
            'entityManager' => '?',
        ]);
    }
}
