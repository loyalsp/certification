<?php

$x = 5;
$x *= 3;             // Ecivalent with:  $x = $x * 3;
$nr = 10;
if ($nr==8)
{
echo '$nr is '.$nr."\n";
}
    else echo '$nr is not '.$nr."\n"; 
    
    
// using isset function 
if(isset($y)){
    echo '$x is set to'.$y;
}
else echo '$x is not set to anything'."\n";


$x;
 if(is_null($x))
 {
     echo 'this $x is null'."\n" ; 
 }
else if (isset($a))
{
    echo '$x is set to '."$x\n";
}
else echo '$a is not defined yet'."\n";


$x = null;
$abc = 495;
$xyz = 569;
if ($abc==$xyz && is_null($X))
{
    echo 'Both statemest are ture';
}
else if($abc==$xyz && is_null($y))
{
    echo 'one of these statments is true';
}
else echo 'Both (if and elseif) are returning false';