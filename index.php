<?php

if (version_compare(PHP_VERSION, '5.4.0', '<')) {
	require_once "lib/template/_errorPhpVersion.php";
	exit();
}

define("APP_DIR", __DIR__);
include "lib/_boot.php";
