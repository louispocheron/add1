<?php

namespace ContainerNg1xJRW;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSaisieControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SaisieController' shared autowired service.
     *
     * @return \App\Controller\SaisieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SaisieController.php';

        $container->services['App\\Controller\\SaisieController'] = $instance = new \App\Controller\SaisieController();

        $instance->setContainer(($container->privates['.service_locator.t6xtnhZ'] ?? $container->load('get_ServiceLocator_T6xtnhZService'))->withContext('App\\Controller\\SaisieController', $container));

        return $instance;
    }
}
