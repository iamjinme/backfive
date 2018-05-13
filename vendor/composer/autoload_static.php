<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a2599ffd98755e757f4b27338aac784
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a2599ffd98755e757f4b27338aac784::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a2599ffd98755e757f4b27338aac784::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5a2599ffd98755e757f4b27338aac784::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
