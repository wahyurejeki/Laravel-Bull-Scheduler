<?php
// Stupid work-around hack because PHPUnit seemingly doesn't want to respect the composer autoload setting
$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr4("WahyuRejeki\\BullScheduler\\", __DIR__.'/../src', true);
$classLoader->register();
// EOF
