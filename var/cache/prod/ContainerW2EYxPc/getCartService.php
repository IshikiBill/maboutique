<?php

namespace ContainerW2EYxPc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Classe\Cart' shared autowired service.
     *
     * @return \App\Classe\Cart
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));

        if (isset($container->privates['App\\Classe\\Cart'])) {
            return $container->privates['App\\Classe\\Cart'];
        }

        return $container->privates['App\\Classe\\Cart'] = new \App\Classe\Cart(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), $a);
    }
}
