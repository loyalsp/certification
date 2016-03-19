<?php
$x = -5.631;
$y = .0001;

$z = abs($x);

$a = 3.001;
$a = ceil($a); // this function returns next highest integer
$b = ceil(-1.664);

$c = 4.5;
$c = floor(4.5); // this function returns next lowest integer
$d = floor(-3.1);

$min = min($a, $b, $c, $x, $y, $d);//this function returns minimux integer in the parameters

$max = max($a, $b, $c, $x, $y, $d);//this function returns highest integer in the parameters

$power = pow(3, 2); //exponent

$easy = number_format(76985543.45);

$u_root = sqrt(8); // this fun returns square root of arguments

echo '$z is '.$z."\n";
echo '$a is '.$a."\n";
echo $b,"\n";
echo $c."\n";
echo '$d is '."$d\n";
echo 'in these parameters $a, $b, $c, $x, $y, $d '."($min is lowest int)\n";
echo 'in these parameters $a, $b, $c, $x, $y, $d '."($max is lowest int)\n";
echo $power."\n";
echo $easy."\n";
echo $u_root;
?>