<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEsWvxae\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEsWvxae/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEsWvxae.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEsWvxae\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEsWvxae\App_KernelDevDebugContainer([
    'container.build_hash' => 'EsWvxae',
    'container.build_id' => 'eefe1252',
    'container.build_time' => 1736426520,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEsWvxae');
