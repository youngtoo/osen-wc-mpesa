<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0f71f2f6d1f32a73092072ef8e1c0c0
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Osen\\Woocommerce\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Osen\\Woocommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Osen\\Woocommerce\\Menus\\Menu' => __DIR__ . '/../..' . '/src/Menus/Menu.php',
        'Osen\\Woocommerce\\Mpesa\\B2C' => __DIR__ . '/../..' . '/src/Mpesa/B2C.php',
        'Osen\\Woocommerce\\Mpesa\\C2B' => __DIR__ . '/../..' . '/src/Mpesa/C2B.php',
        'Osen\\Woocommerce\\Mpesa\\STK' => __DIR__ . '/../..' . '/src/Mpesa/STK.php',
        'Osen\\Woocommerce\\Post\\Metaboxes\\C2B' => __DIR__ . '/../..' . '/src/Post/Metaboxes/C2B.php',
        'Osen\\Woocommerce\\Post\\Types\\B2C' => __DIR__ . '/../..' . '/src/Post/Types/B2C.php',
        'Osen\\Woocommerce\\Post\\Types\\C2B' => __DIR__ . '/../..' . '/src/Post/Types/C2B.php',
        'Osen\\Woocommerce\\Settings\\B2C' => __DIR__ . '/../..' . '/src/Settings/B2C.php',
        'Osen\\Woocommerce\\Settings\\Withdraw' => __DIR__ . '/../..' . '/src/Settings/Withdraw.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0f71f2f6d1f32a73092072ef8e1c0c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0f71f2f6d1f32a73092072ef8e1c0c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0f71f2f6d1f32a73092072ef8e1c0c0::$classMap;

        }, null, ClassLoader::class);
    }
}