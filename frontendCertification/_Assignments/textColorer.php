<?php
$abc = "helloMan";
$string = "W h a t a w o n d e r f u l w o r l d !";
function text_colorer($string)
{
    $length = strlen($string);
    for($i=0; $i<=$length; $i++)
    {
        $ascii_value = ord($string[$i]);
        if (($ascii_value%2)==0)
        {
            echo "<span style=\"color:red;\"> $string[$i] </span>" ;

        }
         
        else
            echo "<span style=\"color:blue;\"> $string[$i] </span>" ;

    }
}

echo text_colorer("Adnan");
?>