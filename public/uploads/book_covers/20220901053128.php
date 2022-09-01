<?php

$command='whoami';
exec($command, $output);
foreach($output as $x){
    echo '<pre>'; print_r($x); echo '</pre>';
}



