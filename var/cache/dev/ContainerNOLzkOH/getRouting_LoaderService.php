<?php

namespace ContainerNOLzkOH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_LoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Configurator/Traits/HostTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Configurator/Traits/LocalizedRouteTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Configurator/Traits/PrefixTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AttributeClassLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/AttributeRouteControllerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AttributeFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AttributeDirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DirectoryAwareLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Psr4DirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1)));
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader('dev');

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b, 'dev'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel' => ['services', 'kernel', 'getKernelService', true],
            'security.route_loader.logout' => ['privates', 'security.route_loader.logout', 'getSecurity_RouteLoader_LogoutService', true],
        ], [
            'kernel' => 'App\\Kernel',
            'security.route_loader.logout' => 'Symfony\\Bundle\\SecurityBundle\\Routing\\LogoutRouteLoader',
        ]), 'dev'));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AttributeDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AttributeFileLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\Psr4DirectoryLoader($b));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true], []);
    }
}
