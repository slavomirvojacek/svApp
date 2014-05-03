<?php

header("Content-Type: text/css", true, 200);
header("Cache-Control: no-cache, must-revalidate", true);
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT", true);

require_once "_compiler/scss.php";

$scss = new scssc();
$scss->setFormatter("scss_formatter_compressed");
$compiled = $scss->compile(file_get_contents("screen.scss"));

file_put_contents(__DIR__ . "/screen.css", $compiled, LOCK_EX);
echo $compiled;
