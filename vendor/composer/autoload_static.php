<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc0e279f7804d851e2e639360688227e
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jsantos\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jsantos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc0e279f7804d851e2e639360688227e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc0e279f7804d851e2e639360688227e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
