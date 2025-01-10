<?php

namespace ContainerNOLzkOH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExplorerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ExplorerController' shared autowired service.
     *
     * @return \App\Controller\ExplorerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ExplorerController.php';

        $container->services['App\\Controller\\ExplorerController'] = $instance = new \App\Controller\ExplorerController(($container->privates['App\\Repository\\BookRepository'] ?? $container->load('getBookRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\ExplorerController', $container));

        return $instance;
    }
}
