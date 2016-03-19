<?php
$str = "hello World";
$res = stripos($str,"r");
echo $res;
$res1 = str_ireplace("hello", "My", $str);
echo $res1;
?>