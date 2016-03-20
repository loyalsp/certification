<?php
// A variable can store different types of data.
$a = "Hello";
$b= '567';
/*To define a variable we use this "$" sign.
 Any text between double qoute or single
 qoute is called string
 the text in the qoute is value of variable */

$c = 158;
/*The data type of this variable is Integer...
 * integra data can be
 any number(decimal +ve or -ve,hexadecimal or octa).
 But without point.
 */

$d = 1.56;
/* if any variable holds any number in point.so its data type is
 Float  (floating point numbers - also called double)
 */

$e = true;
$f = false;
/* The date type of these two variable is boolean.
 as we kno wboolean represents two possible states
 TRUE or False;
 */
$g = array("honda","toyota","ford","fiat");
/* The data type of this variable is an array.
 * An array can store multiple values in one variable.

 */

$h;
$i = null;
/* A variable which has no value or has (null) value.
 its type is NULL.
 */

/*var_dump(); is a built in function which returns data
 type of any variable
 */

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br>";
var_dump($h);
echo "<br>";
var_dump($i);
?>
