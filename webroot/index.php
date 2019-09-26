<?php
define('ENVIRONMENT', 'development');

if(file_exists('../vendor/autoload.php')) {
  require '../vendor/autoload.php';
} else {
  if(defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
      case 'development':
        error_reporting(E_ALL);
      break;
      case 'production':
        error_reporting(0);
      break;
      default:
        exit('The application environment is not set correctly');
    }
  }
}
 ?>
