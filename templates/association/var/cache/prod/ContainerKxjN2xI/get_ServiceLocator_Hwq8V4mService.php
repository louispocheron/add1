<?php

namespace ContainerKxjN2xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hwq8V4mService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Hwq8V4m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Hwq8V4m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actionRepo' => ['privates', 'App\\Repository\\ActionRepository', 'getActionRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'repo' => ['privates', 'App\\Repository\\AssociationsRepository', 'getAssociationsRepositoryService', false],
        ], [
            'actionRepo' => 'App\\Repository\\ActionRepository',
            'paginator' => '?',
            'repo' => 'App\\Repository\\AssociationsRepository',
        ]);
    }
}