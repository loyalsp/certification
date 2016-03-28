<?php
function test(&$var) {
  $var += 5;          // adds 5 to $var
  return $var;
}

$x = 3;

$today = date('h:i:s');
echo '<br />'. date('F j, Y')."\n";

/*
 * ---------------------
 * Constant
 * ---------------------
*/
define('YOUNGEST', 'adnan','false');
echo "my brother is ".YOUNGEST;

$var =  defined("BROTHERS");


?>