<?php
$string = "W h a t a w o n d e r f u l w o r l d !";
$i = 0;
function textColorer($string)
{
    while($i<=strlen($string))
    {
        $ascii_value = ord($string[$i]);
        if (($ascii_value%2)==0)
        {
            echo "<span style=\"color:red\" > $string[$i] </span>";
        }
        else echo "<span style=\"color:black\" > $string[$i] </span>";
        $i++;
    }
}
textColorer("Dharkona");
?>