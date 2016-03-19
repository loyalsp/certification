<?php
$tag = '<p id="idp">Paragraph</p>';         // Double quotes in a string created with simple quotes
$site = "Domain: 'CoursesWeb.net'";         // Simple quotes in a string created with double quotes

$div = "<div id=\"idd\">Content</div> \n";         // Double quotes and "new line (\n)" escaped in a string with same quotes
echo $tag."\n";
echo $site."\n";
echo $div;
echo "Ad\"n\"an"; //Ad"n"an
//===========================
//  String related practice
//===========================
$str = "
The text content".
"of this string,
created with HEREDOC construct.
";


$site1 = 'marplo.net';
$site2 = 'coursesweb.net';
echo 'Web sites: '. $site1. ', '. $site2;         // Web sites: marplo.net, http://coursesweb.net


echo $str."\n";
$hy = 'Hy';
$hy = $hy. ' MarPlo';
echo "\n";
$str = "       abc  e   f";
echo trim($str,'e');             // Hy MarPlo
$hy = 'Hy ';
$hy .= 'MarPlo'."\n";
echo $hy;             // Hy MarPlo
$str = 'Have a good life.';
echo strlen(" ");

echo stripos("abc",'c')."\n";
//===========================
// Practice on Strings
//===========================

echo "hello.'this' is tes'ting $str
";
//dharkona is very nau"g"hty now
$str7 = "dharkona is very nau\"g\"hty now";
echo strlen('HomePage ')."\n";
echo $str7[0]."\n";
$str8 = "tommorow. we have to work on if else statment";
echo trim($str8,"to")."\n";
echo str_word_count("adnan")."\n"; // function to get words length
// strtolower("HOW DO YOU DO?");
//echo ucfirst($str8)."\n";
$str9 = "express";
echo stripos($str9,"x");

?>