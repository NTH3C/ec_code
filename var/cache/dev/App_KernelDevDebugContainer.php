<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBxD38wB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBxD38wB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBxD38wB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBxD38wB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBxD38wB\App_KernelDevDebugContainer([
    'container.build_hash' => 'BxD38wB',
    'container.build_id' => '4894a848',
    'container.build_time' => 1736517924,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBxD38wB');
