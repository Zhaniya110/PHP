<?php

$message = 'Dump and die example';
function dd($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	die();
}
$message = 'Dump';
//code after line 11 terminated

dd($message);
echo '<pre>';
var_dump($message);
echo '</pre>';
die();

echo 'After calling the die function';
/*How it works

First, dump the information about the $message variable using the var_dump() function.
Second, terminate the script immediately by calling the die() function.*/


?>
