<?php

namespace ContainerT4bQCbB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_Form_RequestHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'form.type_extension.form.request_handler' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'RequestHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpFoundation'.\DIRECTORY_SEPARATOR.'HttpFoundationRequestHandler.php';

        return $container->privates['form.type_extension.form.request_handler'] = new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($container->privates['form.server_params'] ?? $container->load('getForm_ServerParamsService')));
    }
}
