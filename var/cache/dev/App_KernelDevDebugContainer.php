<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJUVD3w0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJUVD3w0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJUVD3w0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJUVD3w0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJUVD3w0\App_KernelDevDebugContainer([
    'container.build_hash' => 'JUVD3w0',
    'container.build_id' => '2099cf67',
    'container.build_time' => 1680315110,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJUVD3w0');
