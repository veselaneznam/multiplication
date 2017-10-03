#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/../vendor/autoload.php';

use PrimesMultiplication\Console\Command\PrimeMultiplicationCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new PrimeMultiplicationCommand());

$application->run();