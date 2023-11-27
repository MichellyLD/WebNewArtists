<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f237b71938fbddba98d55465fa67c4b
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Newartists\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Newartists\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f237b71938fbddba98d55465fa67c4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f237b71938fbddba98d55465fa67c4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f237b71938fbddba98d55465fa67c4b::$classMap;

        }, null, ClassLoader::class);
    }
}