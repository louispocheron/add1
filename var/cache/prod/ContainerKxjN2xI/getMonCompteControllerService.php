<?php

namespace ContainerKxjN2xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonCompteControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MonCompteController' shared autowired service.
     *
     * @return \App\Controller\MonCompteController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\MonCompteController'] = $instance = new \App\Controller\MonCompteController();

        $instance->setContainer(($container->privates['.service_locator.cG5C0fD'] ?? $container->load('get_ServiceLocator_CG5C0fDService'))->withContext('App\\Controller\\MonCompteController', $container));

        return $instance;
    }
}
