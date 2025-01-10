<?php

namespace Container2ngV4Tn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BookController' shared autowired service.
     *
     * @return \App\Controller\BookController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BookController.php';

        $container->services['App\\Controller\\BookController'] = $instance = new \App\Controller\BookController(($container->privates['App\\Repository\\BookReadRepository'] ?? $container->load('getBookReadRepositoryService')), ($container->privates['App\\Repository\\BookRepository'] ?? $container->load('getBookRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\BookController', $container));

        return $instance;
    }
}
