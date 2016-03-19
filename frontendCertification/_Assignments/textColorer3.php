<?php
$string = "Whatawonderfulworld!";
function text_colorer($string)
{
    $length = strlen($string);
    for($i=0; $i<=$length; $i++)
    {
       if(($i%2)==0)
       {
           echo "<span style=\"color:red\" > $string[$i] </span>";
       }
        else echo "<span style=\"color:blue\" > $string[$i] </span>";
    }
}

echo text_colorer($string);
?>