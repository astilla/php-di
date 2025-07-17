<?php
require_once 'vendor/autoload.php';

use classses\Foo;
use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder();
// $containerBuilder->useAnnotations(true); // Needs doctrine/annotations (see: https://github.com/PHP-DI/PHP-DI/blob/6.4/doc/annotations.md#annotations)

// $containerBuilder->addDefinitions(__DIR__ . '/config.php');
// $containerBuilder->addDefinitions([
// ]);

$container = $containerBuilder->build();

$foo = $container->get(Foo::class);

$foo->sayBar();