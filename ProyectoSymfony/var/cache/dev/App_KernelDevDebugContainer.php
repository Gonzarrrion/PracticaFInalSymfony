<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCKk1Tnw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCKk1Tnw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCKk1Tnw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCKk1Tnw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCKk1Tnw\App_KernelDevDebugContainer([
    'container.build_hash' => 'CKk1Tnw',
    'container.build_id' => '26ec9ab7',
    'container.build_time' => 1716392937,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCKk1Tnw');
