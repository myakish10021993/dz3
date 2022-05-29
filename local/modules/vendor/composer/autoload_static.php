<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a495e23aa78cdb0b4d91eb5a3a0a949
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a495e23aa78cdb0b4d91eb5a3a0a949::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a495e23aa78cdb0b4d91eb5a3a0a949::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
