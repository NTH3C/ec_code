<?php

namespace ContainerEsWvxae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginControllerloginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3QECKYg.App\Controller\LoginController::login()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3QECKYg.App\\Controller\\LoginController::login()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'authenticationUtils' => '?',
        ]))->withContext('App\\Controller\\LoginController::login()', $container);
    }
}
