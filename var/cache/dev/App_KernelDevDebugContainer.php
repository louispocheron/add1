<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8sGRHqW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8sGRHqW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8sGRHqW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8sGRHqW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8sGRHqW\App_KernelDevDebugContainer([
    'container.build_hash' => '8sGRHqW',
    'container.build_id' => '9405ba33',
    'container.build_time' => 1672824748,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8sGRHqW');
