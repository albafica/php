<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.baidu.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_PROXY, "10.100.10.100:3128");
$output = curl_exec($ch);
if($output === false){
    echo 'CURL Error' . curl_error($ch);
}
$info = curl_getinfo($ch);
curl_close($ch);
//echo $output;
var_dump($info);