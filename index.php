<?php
echo "Hello World";

$command = 'hostname';
$output =shell_exec("{$command} 2>&1");
print_r($output);
?>
