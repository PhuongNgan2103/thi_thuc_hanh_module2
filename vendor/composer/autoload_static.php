<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaab93fd55a8368b42898c9ff717b93da
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaab93fd55a8368b42898c9ff717b93da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaab93fd55a8368b42898c9ff717b93da::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
