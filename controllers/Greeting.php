<?php
namespace Controllers;

Class Greeting {
  function convert($size)
  {
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
  }
  function index($name) {
    echo "Greeting->index";
  }
	function hello($name) {
    global $templates, $start;
    // Example to use ActiveRecord included
    $movie = \Model::factory('Movies')->find_one(1);
    // Render a template
    $memory = self::convert(memory_get_usage(true));
    $time = round((microtime(true) - $start)*1000,4);
    echo $templates->render('hello', ['name' => $name, 'time' => $time, 'memory' => $memory]);
	}
}
