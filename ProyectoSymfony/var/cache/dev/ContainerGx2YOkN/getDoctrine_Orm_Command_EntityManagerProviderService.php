<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerGx2YOkN/getDoctrine_Orm_Command_EntityManagerProviderService.php
namespace ContainerGx2YOkN;
========
namespace ContainerPYNm3tb;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerPYNm3tb/getDoctrine_Orm_Command_EntityManagerProviderService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Command_EntityManagerProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.command.entity_manager_provider' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Orm\ManagerRegistryAwareEntityManagerProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/EntityManagerProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Orm/ManagerRegistryAwareEntityManagerProvider.php';

        return $container->privates['doctrine.orm.command.entity_manager_provider'] = new \Doctrine\Bundle\DoctrineBundle\Orm\ManagerRegistryAwareEntityManagerProvider(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
