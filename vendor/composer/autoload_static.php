<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6bf0f236d80116d547f7ffe7445e1b2
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bitm\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bitm\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6bf0f236d80116d547f7ffe7445e1b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6bf0f236d80116d547f7ffe7445e1b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6bf0f236d80116d547f7ffe7445e1b2::$classMap;

        }, null, ClassLoader::class);
    }
}