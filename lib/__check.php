<?php

if (version_compare(PHP_VERSION, '5.4.0', '<')) {
	require_once "template/_errorPhpVersion.php";
	exit();
}

$usage = array(
		"usage" => getrusage(),
		"randKey" => bin2hex(openssl_random_pseudo_bytes(11))
);

$initDir = glob(__DIR__ . "/*", GLOB_ONLYDIR)[0];

/**
 * Randomly rename the main lib folder
 * if library randomisation is enabled
 */
if (LIB_RANDOMISATION) {
	$newDir = APP_DIR . "/lib/" . $usage["randKey"];
	rename($initDir, $newDir);
}
else {
	$newDir = $initDir;
}

define("LIB_DIR", $newDir);
