<?php

use Chronos\PHPDepGraph\Grapher;
use Chronos\PHPDepGraph\Options;

require_once "../lib/Chronos/PHPDepGraph/bootstrap.php";

$option = new Options($argv);

$grapher = new Grapher($option);

$grapher->Graph();