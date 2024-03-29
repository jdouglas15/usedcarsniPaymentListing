<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e1f62d94f0ea4e72df0ee5a9d87f33a
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Acme\\Test' => __DIR__ . '/../..' . '/src/Test.php',
        'App\\Record' => __DIR__ . '/../..' . '/src/Record.php',
        'App\\Car' => __DIR__ . '/../..' . '/src/Car.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit3e1f62d94f0ea4e72df0ee5a9d87f33a::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit3e1f62d94f0ea4e72df0ee5a9d87f33a::$classMap;

        }, null, ClassLoader::class);
    }
}
