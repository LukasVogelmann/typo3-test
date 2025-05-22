<?php

declare(strict_types=1);
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->usePutenv()->load(realpath(__DIR__ . '/../../.env'));