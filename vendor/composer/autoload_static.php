<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bbd412db268d148dfd5ea31a3cb2ccb
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tiger\\Contact\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tiger\\Contact\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7bbd412db268d148dfd5ea31a3cb2ccb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7bbd412db268d148dfd5ea31a3cb2ccb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}