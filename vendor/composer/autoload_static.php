<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita25af24fc1424cfbcb8dad6908673036
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita25af24fc1424cfbcb8dad6908673036::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita25af24fc1424cfbcb8dad6908673036::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita25af24fc1424cfbcb8dad6908673036::$classMap;

        }, null, ClassLoader::class);
    }
}