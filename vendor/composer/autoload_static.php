<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46ffe8dd5587cb1e0c49d61a2cdfb666
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jannedevos\\LaravelAnalytics\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jannedevos\\LaravelAnalytics\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit46ffe8dd5587cb1e0c49d61a2cdfb666::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46ffe8dd5587cb1e0c49d61a2cdfb666::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46ffe8dd5587cb1e0c49d61a2cdfb666::$classMap;

        }, null, ClassLoader::class);
    }
}
