<?php

namespace ContainerPYNm3tb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuscarLibroEditorialBibliotecaFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\BuscarLibroEditorialBibliotecaFormType' shared autowired service.
     *
     * @return \App\Form\BuscarLibroEditorialBibliotecaFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/BuscarLibroEditorialBibliotecaFormType.php';

        return $container->privates['App\\Form\\BuscarLibroEditorialBibliotecaFormType'] = new \App\Form\BuscarLibroEditorialBibliotecaFormType();
    }
}
