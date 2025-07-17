<?php
require_once 'vendor/autoload.php';

use classses\Foo;
use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder();

// For things like top level controllers, the php-di best practice guide (https://github.com/PHP-DI/PHP-DI/blob/6.4/doc/best-practices.md)
// suggests ('@Inject'ing dependencies at the top level - you need doctrine/annotations for this and then switch it on) 
$containerBuilder->useAnnotations(true); // Needs doctrine/annotations (see: https://github.com/PHP-DI/PHP-DI/blob/6.4/doc/annotations.md#annotations)

// We only need definitions listed for anything that can't be autowired
// or needs to know parameter values.
// 
// You can either pull defintions from a file...
// $containerBuilder->addDefinitions(__DIR__ . '/config.php');
//
// Or straight from an array...
// $containerBuilder->addDefinitions([
// ]);

$container = $containerBuilder->build();

$foo = $container->get(Foo::class);

$foo->sayBar(); // This one injects `Bar` via contructor auto-wiring

$foo->sayBaz(); // This one injects `Baz` via variable annotation auto-wiring
