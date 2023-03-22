<?php
$fp = fopen("header.php",'wb');
for($j = 0; $j <100; $j++){
    $written = fwrite($fb, "data");
    if($written == FALSE) break;
}