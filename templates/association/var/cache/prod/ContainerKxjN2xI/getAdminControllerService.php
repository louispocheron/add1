<?php

namespace ContainerKxjN2xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AdminController' shared autowired service.
     *
     * @return \App\Controller\AdminController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AdminController'] = $instance = new \App\Controller\AdminController();

        $instance->setContainer(($container->privates['.service_locator.cG5C0fD'] ?? $container->load('get_ServiceLocator_CG5C0fDService'))->withContext('App\\Controller\\AdminController', $container));

        return $instance;
    }
}
