<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEkhydnf\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEkhydnf/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerEkhydnf.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerEkhydnf\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerEkhydnf\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Ekhydnf',
    'container.build_id' => 'cbf37d97',
    'container.build_time' => 1521279708,
));
