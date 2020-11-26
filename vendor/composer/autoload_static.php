<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88f2ce8c031686ba276b5cf91961b494
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88f2ce8c031686ba276b5cf91961b494::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88f2ce8c031686ba276b5cf91961b494::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
