<?php

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br />';
    ob_flush();
    flush();
    sleep(1);
}