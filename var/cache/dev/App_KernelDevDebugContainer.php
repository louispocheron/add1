<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXVXxw8g\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXVXxw8g/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXVXxw8g.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXVXxw8g\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXVXxw8g\App_KernelDevDebugContainer([
    'container.build_hash' => 'XVXxw8g',
    'container.build_id' => 'abf3c3fe',
    'container.build_time' => 1673360933,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXVXxw8g');
