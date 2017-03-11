<?php
$a=fopen('log.txt', 'a');
fwrite($a,time().' '.$_GET['id'].PHP_EOL);
fclose($a);
echo 'success '.$_GET['id'];