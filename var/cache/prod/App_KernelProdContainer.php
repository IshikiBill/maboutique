<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW2EYxPc\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW2EYxPc/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerW2EYxPc.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerW2EYxPc\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerW2EYxPc\App_KernelProdContainer([
    'container.build_hash' => 'W2EYxPc',
    'container.build_id' => '522c386f',
    'container.build_time' => 1689294119,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW2EYxPc');
