<?php

/**
 * curl POST数据演示
 */
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "10.100.10.100:3128");
curl_setopt($ch, CURLOPT_URL, 'http://localhost/php/CURL/printdata.php');
$data = array(
    'foo' => 'bar',
    'query' => 'php',
    'action' => 'submit',
);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$output = curl_exec($ch);
curl_close($ch);
echo $output;
