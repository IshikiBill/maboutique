<?php

namespace ContainerPcMXJqb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Listener_StopWorkerOnStopExceptionListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.listener.stop_worker_on_stop_exception_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\StopWorkerOnCustomStopExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'StopWorkerOnCustomStopExceptionListener.php';

        return $container->privates['messenger.listener.stop_worker_on_stop_exception_listener'] = new \Symfony\Component\Messenger\EventListener\StopWorkerOnCustomStopExceptionListener();
    }
}
