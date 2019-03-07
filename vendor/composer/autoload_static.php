<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit140deecbf5aa196f4bdd334db148b95d
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\Ease\\Html\\' => 15,
            'Test\\Ease\\' => 10,
            'Test\\' => 5,
        ),
        'E' => 
        array (
            'Example\\Ease\\Html\\' => 18,
            'Ease\\Html\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\Ease\\Html\\' => 
        array (
            0 => __DIR__ . '/../..' . '/testing/src/Ease/Html',
        ),
        'Test\\Ease\\' => 
        array (
            0 => __DIR__ . '/..' . '/vitexsoftware/ease-core/tests/src/Ease',
        ),
        'Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/testing',
        ),
        'Example\\Ease\\Html\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Examples',
        ),
        'Ease\\Html\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Ease/Html',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit140deecbf5aa196f4bdd334db148b95d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit140deecbf5aa196f4bdd334db148b95d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
