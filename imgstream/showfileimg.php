<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$imgPath = $_GET['path'];
$imgPath = str_replace('../', '', $imgPath);
$content = @file_get_contents('./' . $imgPath);
if ($content === false) {
    echo '文件获取失败';
    exit();
}
header("Content-type: image/jpg");
echo base64_decode($content);
exit;
