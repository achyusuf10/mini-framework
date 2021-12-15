<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36902f16addc57cc44ebfba5d09f2025
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '408818d59ab13014483b4b5726edd99c' => __DIR__ . '/../..' . '/system/helpers/global.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'system\\' => 7,
        ),
        'a' => 
        array (
            'application\\' => 12,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'O' => 
        array (
            'Opis\\Database\\' => 14,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'system\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
        'application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Opis\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/database/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36902f16addc57cc44ebfba5d09f2025::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36902f16addc57cc44ebfba5d09f2025::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36902f16addc57cc44ebfba5d09f2025::$classMap;

        }, null, ClassLoader::class);
    }
}