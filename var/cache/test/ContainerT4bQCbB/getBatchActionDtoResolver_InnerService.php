<?php

namespace ContainerT4bQCbB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatchActionDtoResolver_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver.inner' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'BatchActionDtoResolver.php';

        return $container->privates['debug.EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\BatchActionDtoResolver.inner'] = new \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), (isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']() : $container->getAdminUrlGeneratorService()));
    }
}
