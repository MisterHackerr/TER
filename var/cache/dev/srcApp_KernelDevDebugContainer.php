<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZNxZzNA\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZNxZzNA/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZNxZzNA.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZNxZzNA\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZNxZzNA\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ZNxZzNA',
    'container.build_id' => '85a92aa5',
    'container.build_time' => 1556202718,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZNxZzNA');
