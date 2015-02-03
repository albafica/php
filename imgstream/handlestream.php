<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../fileupload/FileUpload.class.php';
$fileUpload = new FileUpload();
$info = $fileUpload->uploadMulti('upload/');
if (!$info) {
    //上传失败，返回错误
    echo "<script>parent.upImgErr('" . $fileUpload->getErrMsg() . "')</script>";
} else {
    $imgData = $fileUpload->getUploadFileInfo();
    $fileStream = file_get_contents($imgData[0]['savepath'] . $imgData[0]['savename']);
    echo "<script>parent.upImgSuccess1('" . $imgData[0]['savepath'] . $imgData[0]['savename'] . "','" . $fileStream . "');</script>";
}