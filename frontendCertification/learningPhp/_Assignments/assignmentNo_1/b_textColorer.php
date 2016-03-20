<?php
$string = "W h a t a w o n d e r f u l w o r l d !";
$index = 0;
function textColorer($string)
{
    
    while ($index<=strlen($string))
    {
        $ascii_value = ord($string[$index]);
        if (($ascii_value%2)==0)
        {
            echo "<span style=\"color:red;\"> $string[$index] </span>";
        }
        else echo "<span style=\"color:blue;\"> $string[$index] </span>";
        $index++;
    }
}
textColorer($string);
?>