<?php

namespace ContainerKxjN2xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordRequestFormTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ResetPasswordRequestFormType' shared autowired service.
     *
     * @return \App\Form\ResetPasswordRequestFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ResetPasswordRequestFormType'] = new \App\Form\ResetPasswordRequestFormType();
    }
}
