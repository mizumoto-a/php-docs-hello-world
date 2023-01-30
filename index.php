<?php
echo "Hello World";

$command = 'ls -l';
$output =shell_exec("{$command} 2>&1");
print_r($output);
?
