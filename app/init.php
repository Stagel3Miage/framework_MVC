<?php
session_start();
// Composer autoloader
require_once('core/utils.php');
require_once '../vendor/autoload.php';
require_once 'database.php';
require_once 'db_connection.php';

require_once 'core/App.php';
require_once 'core/Controller.php';
define('CSS_PATH', '/framework_MVC/app/views/includes/');
define('INCLUDES_PATH', '/framework_MVC/app/views/includes/');

?>
