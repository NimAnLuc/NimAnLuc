<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb831ab819dd2899c8c3e9de78c4ccf9
{
    public static $files = array (
        '7a23225a1d117b3590ff998390933c53' => __DIR__ . '/../..' . '/app/Route.php',
        '94c89dd35bbdccf0bb66a14a61d2e8ef' => __DIR__ . '/../..' . '/config/database.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb831ab819dd2899c8c3e9de78c4ccf9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb831ab819dd2899c8c3e9de78c4ccf9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfb831ab819dd2899c8c3e9de78c4ccf9::$classMap;

        }, null, ClassLoader::class);
    }
}