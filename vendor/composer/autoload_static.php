<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd63e8e785760442700c28b15d377d4a5
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CaioLandgraf\\RequestApi\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CaioLandgraf\\RequestApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd63e8e785760442700c28b15d377d4a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd63e8e785760442700c28b15d377d4a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd63e8e785760442700c28b15d377d4a5::$classMap;

        }, null, ClassLoader::class);
    }
}
