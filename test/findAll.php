<?php

use test\Gnugat\NomoSpaco\Container;

require __DIR__.'/../vendor/autoload.php';

$script = $argv[0];
if (2 !== $argc) {
    die("Usage: 'php $script <projectRoot>'\n");
}
$projectRoot = $argv[1];
$container = new Container();
$fqcnRepository = $container->get();
var_dump($fqcnRepository->findAll($projectRoot));
