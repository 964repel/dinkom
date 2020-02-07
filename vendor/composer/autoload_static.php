<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32537174702f3ec41adada8df7e730aa
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'dinkom\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'dinkom\\' => 
        array (
            0 => __DIR__ . '/..' . '/dinkom.local/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32537174702f3ec41adada8df7e730aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32537174702f3ec41adada8df7e730aa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
