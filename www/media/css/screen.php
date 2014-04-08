<?php

header("Content-Type: text/css", true, 200);
header("Cache-Control: no-cache, must-revalidate", true);
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT", true);

require "_compiler/lessc.php";

$less = new Less;
$css = $less->compileFile("screen.less");

file_put_contents(__DIR__ . "/screen.css", $css, LOCK_EX);
echo $css;
