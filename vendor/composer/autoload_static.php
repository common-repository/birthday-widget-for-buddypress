<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf5555ee1362075472616689742ca7d1
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HardG\\BuddyPress120URLPolyfills\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HardG\\BuddyPress120URLPolyfills\\' => 
        array (
            0 => __DIR__ . '/..' . '/hard-g/buddypress-12.0-url-polyfills/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf5555ee1362075472616689742ca7d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf5555ee1362075472616689742ca7d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf5555ee1362075472616689742ca7d1::$classMap;

        }, null, ClassLoader::class);
    }
}
