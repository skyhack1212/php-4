<?php

/* Prototype  : mixed sscanf  ( string $str  , string $format  [, mixed &$...  ] )
 * Description: Parses input from a string according to a format
 * Source code: ext/standard/string.c
*/

echo "*** Testing sscanf() : basic functionality - using unsigned format ***\n";

$str = "-11 +11 11 -11.234 +11.234 11.234";
$format = "%u %u %u %u %u %u";

echo "\n-- Try sccanf() WITHOUT optional args --\n"; 
// extract details using short format
list($arg1, $arg2, $arg3, $arg4, $arg5, $arg6) = sscanf($str, $format);
var_dump($arg1, $arg2, $arg3, $arg4, $arg5, $arg6);

echo "\n-- Try sccanf() WITH optional args --\n"; 
// extract details using long  format
$res = sscanf($str, $format, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6);
var_dump($res, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6); 

?>
===DONE===
