<?php

namespace ContainerUyHrGGH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuscarBibliotecaNombreFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\BuscarBibliotecaNombreFormType' shared autowired service.
     *
     * @return \App\Form\BuscarBibliotecaNombreFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/BuscarBibliotecaNombreFormType.php';

        return $container->privates['App\\Form\\BuscarBibliotecaNombreFormType'] = new \App\Form\BuscarBibliotecaNombreFormType();
    }
}