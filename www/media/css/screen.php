<?php

header("Content-Type: text/css", true, 200);
header("Cache-Control: no-cache, must-revalidate", true);
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT", true);

require_once "_compiler/lessc.php";

$parser = new Less_Parser();
$parser->parseFile("screen.less");

file_put_contents(__DIR__ . "/screen.css", $parser->getCss(), LOCK_EX);

echo $parser->getCss();
