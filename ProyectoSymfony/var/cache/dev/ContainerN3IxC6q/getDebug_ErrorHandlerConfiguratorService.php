<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerN3IxC6q/getDebug_ErrorHandlerConfiguratorService.php
namespace ContainerN3IxC6q;
========
namespace Container09Mb6BU;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/Container09Mb6BU/getDebug_ErrorHandlerConfiguratorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ErrorHandlerConfiguratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'debug.error_handler_configurator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/ErrorHandlerConfigurator.php';

        return $container->services['debug.error_handler_configurator'] = new \Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator(($container->privates['logger'] ?? self::getLoggerService($container)), NULL, -1, true, true, NULL);
    }
}