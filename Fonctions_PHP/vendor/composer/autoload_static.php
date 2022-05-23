<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb30593da8e5637ec4e0fd7a1d4a5d12
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb30593da8e5637ec4e0fd7a1d4a5d12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb30593da8e5637ec4e0fd7a1d4a5d12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfb30593da8e5637ec4e0fd7a1d4a5d12::$classMap;

        }, null, ClassLoader::class);
    }
}
