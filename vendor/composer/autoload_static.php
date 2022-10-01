<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d0b2dd421cde8202ef935529d232467
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webgrilo\\Theme\\' => 15,
        ),
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
        'Webgrilo\\Theme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d0b2dd421cde8202ef935529d232467::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d0b2dd421cde8202ef935529d232467::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d0b2dd421cde8202ef935529d232467::$classMap;

        }, null, ClassLoader::class);
    }
}