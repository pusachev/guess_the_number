#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

$gameResultFactory = new \Factory\Result\GameResultFactory();
$gameHandler = new \Handler\GameHandler($gameResultFactory);
$generator = new \Model\GenerateRandomNumber();

$userFactory = new \Factory\UserFactory();

$application->add(new Console\Command\GameCommand(
        $userFactory,
        $gameHandler,
        $generator,
        'app:game:start'
    )
);
$application->add(new Console\Command\Test());

$application->run();