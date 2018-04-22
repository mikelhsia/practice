<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite542a95aa8a24be9a24b029ff35992ff
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInite542a95aa8a24be9a24b029ff35992ff' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInite542a95aa8a24be9a24b029ff35992ff' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Task' => __DIR__ . '/../..' . '/views/Task.php',
        'User' => __DIR__ . '/../..' . '/views/User.php',
        'UsersController' => __DIR__ . '/../..' . '/controllers/UsersController.php',
        'name' => __DIR__ . '/../..' . '/controllers/name.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite542a95aa8a24be9a24b029ff35992ff::$classMap;

        }, null, ClassLoader::class);
    }
}