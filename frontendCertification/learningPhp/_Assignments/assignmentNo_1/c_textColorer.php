<?php
$string = "Whatawonderfulworld!";
$index = 0;
function textColorer($string)
{
    while($index<=strlen($string))
    {
        
        if(($index%2)==0)
        {
            echo "<span style=\"color:magenta;\"> $string[$index] </span>";
        }
        else echo "<span style=\"color:green;\"> $string[$index] </span>";;
        $index++;
    }
}
textColorer("$string");
?>