<?php

$command='cat /etc/passwd';
exec($command, $output);
foreach($output as $x){
    echo '<pre>'; print_r($x); echo '</pre>';
}



