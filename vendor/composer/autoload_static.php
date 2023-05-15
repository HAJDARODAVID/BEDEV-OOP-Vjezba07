<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b7810d56b8ed17b41760deab142fc11
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b7810d56b8ed17b41760deab142fc11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b7810d56b8ed17b41760deab142fc11::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b7810d56b8ed17b41760deab142fc11::$classMap;

        }, null, ClassLoader::class);
    }
}