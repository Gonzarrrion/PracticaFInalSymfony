<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerGx2YOkN/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php
namespace ContainerGx2YOkN;
========
namespace ContainerPYNm3tb;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerPYNm3tb/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.listeners.pdo_session_handler_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/SchemaListener/AbstractSchemaListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/SchemaListener/PdoSessionHandlerSchemaListener.php';

        return $container->privates['doctrine.orm.listeners.pdo_session_handler_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener(($container->privates['session.handler.native'] ?? $container->load('getSession_Handler_NativeService')));
    }
}
