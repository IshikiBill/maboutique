<?php

namespace ContainerT4bQCbB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChatter_TransportsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'chatter.transports' shared service.
     *
     * @return \Symfony\Component\Notifier\Transport\Transports
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'Transports.php';

        $a = ($container->privates['chatter.transport_factory'] ?? $container->load('getChatter_TransportFactoryService'));

        if (isset($container->privates['chatter.transports'])) {
            return $container->privates['chatter.transports'];
        }

        return $container->privates['chatter.transports'] = $a->fromStrings([]);
    }
}
