<?php
$parametro = $_GET["whois"];
$whois_output = shell_exec("whois $parametro");
echo $whois_output;
?>
