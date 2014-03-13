<?php

$loader = require __DIR__.'/../vendor/autoload.php';
$loader->setPsr4('Tests\\', __DIR__);

class TestCase extends PHPUnit_Framework_TestCase
{

}
