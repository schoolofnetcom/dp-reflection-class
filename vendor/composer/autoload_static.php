<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9d208522156870040a48cd37db4e54b
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ErikFig\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ErikFig\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9d208522156870040a48cd37db4e54b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9d208522156870040a48cd37db4e54b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}