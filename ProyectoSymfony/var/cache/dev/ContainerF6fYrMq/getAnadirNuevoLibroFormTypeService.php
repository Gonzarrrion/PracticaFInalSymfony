<?php

namespace ContainerF6fYrMq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnadirNuevoLibroFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AnadirNuevoLibroFormType' shared autowired service.
     *
     * @return \App\Form\AnadirNuevoLibroFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AnadirNuevoLibroFormType.php';

        return $container->privates['App\\Form\\AnadirNuevoLibroFormType'] = new \App\Form\AnadirNuevoLibroFormType();
    }
}