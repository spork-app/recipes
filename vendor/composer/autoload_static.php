<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc21820ddef37863a1af0419156d0b21
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spork\\Food\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spork\\Food\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc21820ddef37863a1af0419156d0b21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc21820ddef37863a1af0419156d0b21::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc21820ddef37863a1af0419156d0b21::$classMap;

        }, null, ClassLoader::class);
    }
}