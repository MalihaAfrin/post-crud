<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0c4ee15766d5f171745c626e3ef354d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pondit\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pondit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0c4ee15766d5f171745c626e3ef354d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0c4ee15766d5f171745c626e3ef354d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
