<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNkw8EiZ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNkw8EiZ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNkw8EiZ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNkw8EiZ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNkw8EiZ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Nkw8EiZ',
    'container.build_id' => '10d8c239',
    'container.build_time' => 1602253978,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNkw8EiZ');
