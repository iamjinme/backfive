<?php
require_once('vendor/paris/idiorm.php');
require_once('vendor/paris/paris.php');

// Config ORM database
define("DATA_SOURCE", $config[ENV]['engine'].':host='.$config[ENV]['host'].';dbname='.$config[ENV]['database']);
ORM::configure(DATA_SOURCE);
if ($config[ENV]['engine'] !== 'sqlite') {
  ORM::configure('username', $config[ENV]['username']);
  ORM::configure('password', $config[ENV]['password']);
}
