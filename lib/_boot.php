<?php

session_start();

define("DEBUG", true);
define("GRID", false);

define("LIB_DIR", __DIR__);
define("WWW_APP_DIR", APP_DIR . "/www/app");
define("UPLOAD_DIR", APP_DIR . "/temp");
define("BR", PHP_EOL);

/**
 * Error reporting
 */
if (DEBUG) {
	error_reporting(E_ALL);
	ini_set("display_errors", E_ALL);
}
else {
	error_reporting(0);
}

/**
 * Initialise autoloader
 */
require_once "utilities/autoload.php";

$app = array_merge(Utilities\Neon::decode(file_get_contents(APP_DIR . "/_config/app.neon")), $usage);

date_default_timezone_set($app["dateTime"]);

mb_internal_encoding($app["encoding"]);
mb_http_output($app["encoding"]);

ini_set("upload_max_filesize", "20M");
ini_set("post_max_size", "20M");
ini_set("max_input_time", 180);
ini_set("max_execution_time", 180);
set_time_limit(180);

/**
 * Go!
 */
$tmp = new Template\Template;
$tmp->run();
