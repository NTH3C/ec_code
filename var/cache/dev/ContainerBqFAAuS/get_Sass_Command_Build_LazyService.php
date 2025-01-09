<?php

namespace ContainerBqFAAuS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Sass_Command_Build_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.sass.command.build.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.sass.command.build.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('sass:build', [], 'Builds the Sass assets', false, #[\Closure(name: 'sass.command.build', class: 'Symfonycasts\\SassBundle\\Command\\SassBuildCommand')] fn (): \Symfonycasts\SassBundle\Command\SassBuildCommand => ($container->privates['sass.command.build'] ?? $container->load('getSass_Command_BuildService')));
    }
}
