<?php
function d($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}
$balance = "100";
echo d($balance);
$message = 'Insufficient balance';
d($message);

?>