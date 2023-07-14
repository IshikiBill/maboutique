<?php

namespace ContainerW2EYxPc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ResetPasswordRepository' shared autowired service.
     *
     * @return \App\Repository\ResetPasswordRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ResetPasswordRepository'] = new \App\Repository\ResetPasswordRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
