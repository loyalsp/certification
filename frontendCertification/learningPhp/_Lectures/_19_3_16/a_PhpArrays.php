 <?php
/*
$var1 = 2;
$var2 = '1';
$add = $var1+'1';


// specifying the keys for each element
$array[0] = 'php';
$array[1] = 'mysql';
$array[2] = 8;
//
$array[] = 4;

// without specifying the keys"
//$fruits[] = 'apple';
//$fruits[] = 'banana';
//$fruits[] = 'apricots';
//echo "$fruits[2]\n";
//echo "$fruits\n";

// specifying the keys for each element
$array = array(0=>'php', 1=>'mysql', 2=>8);

// without specifying the keys
$fruits = array('apple', 'banana', 'apricots');
echo "$fruits[2]\n";
echo "$fruits\n";
echo $array[1]." line 28\n";
// using string keys
$array = array('language'=>'php', 'database'=>'mysql', 'number'=>8);
echo "$array[languag]\n";
echo "$array[numbe]\n";
echo count("abcd")."\n";

$sites['en'] = 'www.courseweb.net';
$sites['ro'] = 'www.marplo.net';
$sites['search'] = 'www.google.com';
echo $sites[enro];

for ($index=0; $index<=count($sites); $index++){
    
    echo $sites[$index]."\n";
} */
echo $_SERVER['REQUEST_URI'];
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;

$cars[1] ='Toyota'; 
$cars[0] = 'Honda';
$cars[] = '9210';
$cars[3] = 'ford';
$cars[5] = 'fiat';
$cars = array('a'=>'Honda','b'=>'Toyota','c'=>'9210','d'=>'ford','d'=>'tundra');
echo $cars['a'];
?>