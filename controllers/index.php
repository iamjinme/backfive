<?php
  // Load any controllers in directory
  foreach (scandir(dirname(__FILE__)) as $filename) {
    $path = dirname(__FILE__) . '/' . $filename;
    if (is_file($path) && ($path !== __FILE__)) {
      require $path;
    }
  }
