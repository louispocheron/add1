<?php

namespace ContainerKxjN2xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H5XMMDMService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.h5XMMDM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h5XMMDM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'assocRepo' => ['privates', 'App\\Repository\\AssociationsRepository', 'getAssociationsRepositoryService', false],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'assocRepo' => 'App\\Repository\\AssociationsRepository',
            'em' => '?',
            'paginator' => '?',
        ]);
    }
}
