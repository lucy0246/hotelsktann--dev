<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit237293aa4097c202ac95235c1ac782eb
{
    public static $files = array (
        '6c200413eed8aeea54dbaf934a31b127' => __DIR__ . '/..' . '/weglot/simplehtmldom/src/simple_html_dom.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Weglot\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'Morphism\\' => 9,
        ),
        'L' => 
        array (
            'Languages\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Weglot\\' => 
        array (
            0 => __DIR__ . '/..' . '/weglot/weglot-php/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Morphism\\' => 
        array (
            0 => __DIR__ . '/..' . '/gmulti/morphism-php/lib',
        ),
        'Languages\\' => 
        array (
            0 => __DIR__ . '/..' . '/weglot/weglot-php/node_modules/@weglot/languages/dist',
        ),
    );

    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'WGSimpleHtmlDom' => 
            array (
                0 => __DIR__ . '/..' . '/weglot/simplehtmldom/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Weglot\\TranslationDefinitions' => __DIR__ . '/..' . '/weglot/translation-definitions/index.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit237293aa4097c202ac95235c1ac782eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit237293aa4097c202ac95235c1ac782eb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit237293aa4097c202ac95235c1ac782eb::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit237293aa4097c202ac95235c1ac782eb::$classMap;

        }, null, ClassLoader::class);
    }
}
