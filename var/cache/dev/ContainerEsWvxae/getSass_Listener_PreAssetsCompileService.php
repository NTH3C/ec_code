<?php

namespace ContainerEsWvxae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSass_Listener_PreAssetsCompileService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sass.listener.pre_assets_compile' shared service.
     *
     * @return \Symfonycasts\SassBundle\Listener\PreAssetsCompileEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/sass-bundle/src/Listener/PreAssetsCompileEventListener.php';

        return $container->privates['sass.listener.pre_assets_compile'] = new \Symfonycasts\SassBundle\Listener\PreAssetsCompileEventListener(($container->privates['sass.builder'] ?? $container->load('getSass_BuilderService')));
    }
}
