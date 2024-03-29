<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ddd7857bd2fe1ba3ef0b5b241ed3aab
{
    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'uk\\org\\brentso\\orchestra_manager\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'uk\\org\\brentso\\orchestra_manager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/php',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'uk\\org\\brentso\\orchestra_manager\\admin_menu\\AdminMenu' => __DIR__ . '/../..' . '/php/admin_menu/AdminMenu.php',
        'uk\\org\\brentso\\orchestra_manager\\block\\BlockCategory' => __DIR__ . '/../..' . '/php/block/BlockCategory.php',
        'uk\\org\\brentso\\orchestra_manager\\custom_field\\CustomField' => __DIR__ . '/../..' . '/php/custom_field/CustomField.php',
        'uk\\org\\brentso\\orchestra_manager\\custom_field\\CustomFieldInterface' => __DIR__ . '/../..' . '/php/custom_field/CustomFieldInterface.php',
        'uk\\org\\brentso\\orchestra_manager\\post\\ColumnInterface' => __DIR__ . '/../..' . '/php/post/ColumnInterface.php',
        'uk\\org\\brentso\\orchestra_manager\\post\\PostLabels' => __DIR__ . '/../..' . '/php/post/PostLabels.php',
        'uk\\org\\brentso\\orchestra_manager\\post\\PostType' => __DIR__ . '/../..' . '/php/post/PostType.php',
        'uk\\org\\brentso\\orchestra_manager\\post\\PostTypeInterface' => __DIR__ . '/../..' . '/php/post/PostTypeInterface.php',
        'uk\\org\\brentso\\orchestra_manager\\taxonomy\\Taxonomy' => __DIR__ . '/../..' . '/php/taxonomy/Taxonomy.php',
        'uk\\org\\brentso\\orchestra_manager\\taxonomy\\TaxonomyLabels' => __DIR__ . '/../..' . '/php/taxonomy/TaxonomyLabels.php',
        'uk\\org\\brentso\\orchestra_manager\\trait\\AddableToAdminMenu' => __DIR__ . '/../..' . '/php/trait/AddableToAdminMenu.php',
        'uk\\org\\brentso\\orchestra_manager\\trait\\AutoSlug' => __DIR__ . '/../..' . '/php/trait/AutoSlug.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ddd7857bd2fe1ba3ef0b5b241ed3aab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ddd7857bd2fe1ba3ef0b5b241ed3aab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ddd7857bd2fe1ba3ef0b5b241ed3aab::$classMap;

        }, null, ClassLoader::class);
    }
}
