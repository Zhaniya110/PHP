<?php
$fp = fopen("footer.php",'wb');
for($j = 0; $j <100; $j++){
    $written = fwrite($fb, "data");
    if(!$written) break;
}