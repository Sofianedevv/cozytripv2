<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8wxDNiv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8wxDNiv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8wxDNiv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8wxDNiv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8wxDNiv\App_KernelDevDebugContainer([
    'container.build_hash' => '8wxDNiv',
    'container.build_id' => 'fd71007c',
    'container.build_time' => 1737076114,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8wxDNiv');
