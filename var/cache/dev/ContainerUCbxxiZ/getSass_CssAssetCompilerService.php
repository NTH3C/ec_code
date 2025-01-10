<?php

namespace ContainerUCbxxiZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSass_CssAssetCompilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sass.css_asset_compiler' shared service.
     *
     * @return \Symfonycasts\SassBundle\AssetMapper\SassCssCompiler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/Compiler/AssetCompilerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/sass-bundle/src/AssetMapper/SassCssCompiler.php';

        return $container->privates['sass.css_asset_compiler'] = new \Symfonycasts\SassBundle\AssetMapper\SassCssCompiler([(\dirname(__DIR__, 4).'/assets/styles/app.scss')], (\dirname(__DIR__, 3).'/sass'), \dirname(__DIR__, 4), ($container->privates['sass.builder'] ?? $container->load('getSass_BuilderService')));
    }
}
