<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit663f2d020e62ecdb18e39cb39b5666ca
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Libs\\' => 5,
        ),
        'H' => 
        array (
            'Helpers\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/_classes/Libs',
        ),
        'Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src_classes/Helpers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit663f2d020e62ecdb18e39cb39b5666ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit663f2d020e62ecdb18e39cb39b5666ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit663f2d020e62ecdb18e39cb39b5666ca::$classMap;

        }, null, ClassLoader::class);
    }
}
