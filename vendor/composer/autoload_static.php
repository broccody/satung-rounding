<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46414ec06d09b7975f64ffcd9ecf66bb
{
    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'boonyaritth7\\satung-rounding\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'boonyaritth7\\satung-rounding\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46414ec06d09b7975f64ffcd9ecf66bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46414ec06d09b7975f64ffcd9ecf66bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}