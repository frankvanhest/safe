#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Safe\GenerateCommand;
use Safe\ScanObjectsCommand;
use Safe\DeprecateCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->addCommands([new GenerateCommand()]);
$application->addCommands([new ScanObjectsCommand()]);
$application->addCommands([new DeprecateCommand()]);

$application->run();
