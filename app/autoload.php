<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

date_default_timezone_set('Europe/Paris');

$loader = require __DIR__.'/../vendor/autoload.php';

// intl
if (!function_exists('intl_get_error_code')) {
    require_once __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs/functions.php';

    $loader->add('', __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs');
}

   $loader->add('FOS', __DIR__.'/../vendor/');


AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
