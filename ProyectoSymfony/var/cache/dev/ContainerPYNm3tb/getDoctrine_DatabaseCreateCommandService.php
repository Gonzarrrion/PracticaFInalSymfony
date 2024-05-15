<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerGx2YOkN/getDoctrine_DatabaseCreateCommandService.php
namespace ContainerGx2YOkN;
========
namespace ContainerPYNm3tb;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerPYNm3tb/getDoctrine_DatabaseCreateCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_DatabaseCreateCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Command/CreateDatabaseDoctrineCommand.php';

        $container->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($container->services['doctrine'] ?? $container->load('getDoctrineService')));

        $instance->setName('doctrine:database:create');

        return $instance;
    }
}
