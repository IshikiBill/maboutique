<?php

namespace ContainerW2EYxPc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_PropertyAccessService extends App_KernelProdContainer
{
    /*
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('tIs31fD4yL', 0, $container->getParameter('container.build_id'), ($container->privates['monolog.logger.cache'] ?? $container->getMonolog_Logger_CacheService()));
    }
}
