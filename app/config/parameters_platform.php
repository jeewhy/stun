<?php
$relationships = getenv("PLATFORM_RELATIONSHIPS");
if (!$relationships) {
    return;
}

// Use an SQLite database set in a mounted directory, on Platform.sh only.
$container->setParameter('database_driver', 'pdo_sqlite');
$container->setParameter('database_path', '../app/database/blog.sqlite');

# Store session into /tmp.
ini_set('session.save_path', '/tmp/sessions');
