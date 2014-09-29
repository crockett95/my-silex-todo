<?php
// Add the autoloader
require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';
$app = require_once dirname(dirname(__FILE__)) . '/src/app.php';

$app->run();