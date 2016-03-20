<?php
class Car
{
    public $type;
    function Car($t)
    {
        $type = $t;
    }
    function  move()
    {
        echo "moving now";
    }
    
    function stop() 
    {
        echo "stopping";
    } 
    
}
$mycar = new Car("toyota");
$mycar->move();
$mycar->stop();
$yourcar = new Car("Honda");
echo "\n";
echo $yourcar->$type;
echo $mycar->$type;



?>