<?php

//php，文件处理页面
include '../fileupload/FileUpload.class.php';
$fileUpload = new FileUpload();
$info = $fileUpload->uploadMulti('upload/');
if (!$info) {
    //上传失败，返回错误
    echo "<script>parent.upImgErr('" . $fileUpload->getErrMsg() . "')</script>";
} else {
    $imgData = $fileUpload->getUploadFileInfo();
    $fileStream = base64_encode(file_get_contents($imgData[0]['savepath'] . $imgData[0]['savename']));
    echo "<script>parent.upImgSuccess('" . $imgData[0]['savepath'] . $imgData[0]['savename'] . "','" . $fileStream . "');</script>";
}

