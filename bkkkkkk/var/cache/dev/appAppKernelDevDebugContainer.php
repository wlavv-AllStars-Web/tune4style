<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8RcUqzl\appAppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8RcUqzl/appAppKernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8RcUqzl.legacy');

    return;
}

if (!\class_exists(appAppKernelDevDebugContainer::class, false)) {
    \class_alias(\Container8RcUqzl\appAppKernelDevDebugContainer::class, appAppKernelDevDebugContainer::class, false);
}

return new \Container8RcUqzl\appAppKernelDevDebugContainer([
    'container.build_hash' => '8RcUqzl',
    'container.build_id' => 'a093f688',
    'container.build_time' => 1702307036,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8RcUqzl');
