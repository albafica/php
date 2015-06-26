<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

set_time_limit(0);

for ($i = 0; $i < 100; $i++) {
    echo '第' . $i . '次循环，当前等待' . ($i * 3) . '秒<br/>';
    ob_flush();
    flush();
    sleep(3);
}