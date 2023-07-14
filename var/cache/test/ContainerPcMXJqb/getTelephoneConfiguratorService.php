<?php

namespace ContainerPcMXJqb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTelephoneConfiguratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TelephoneConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TelephoneConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Contracts'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'TelephoneConfigurator.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TelephoneConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TelephoneConfigurator();
    }
}
