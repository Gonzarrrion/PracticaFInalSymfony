<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerN3IxC6q/getBuscarLibroEditorialBiliotecaControllerService.php
namespace ContainerN3IxC6q;
========
namespace ContainerSO4lYH1;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerSO4lYH1/getBuscarLibroEditorialBibliotecaControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuscarLibroEditorialBiliotecaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BuscarLibroEditorialBiliotecaController' shared autowired service.
     *
     * @return \App\Controller\BuscarLibroEditorialBiliotecaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BuscarLibroEditorialBiliotecaController.php';

        $container->services['App\\Controller\\BuscarLibroEditorialBiliotecaController'] = $instance = new \App\Controller\BuscarLibroEditorialBiliotecaController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\BuscarLibroEditorialBiliotecaController', $container));

        return $instance;
    }
}
