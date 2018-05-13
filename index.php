<?php
// Test performance
$start = microtime(true);

// Define your environment
define("ENV", "development");

// Load app configuration
$config = parse_ini_file('config.ini', true);

// Load minimal libraries
require_once('vendor/autoload.php');
require_once('database.php');
require_once('models/index.php');
require_once('controllers/index.php');

// Create template instance
$templates = new \League\Plates\Engine('views');

// Load server
$app = new \Slim\Slim();
require_once('routes.php');
$app->run();
