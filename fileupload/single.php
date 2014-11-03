<?php
if ($_POST['submit']) {
    include 'FileUpload.class.php';
    $fileUpload = new FileUpload();
    $info = $fileUpload->upload('file1', 'upload/');
    var_dump($info);
    if (!$info) {
        var_dump($fileUpload->getErrMsg());
    } else {
        var_dump($fileUpload->getUploadFileInfo());
    }
    exit();
}
?>
<!doctype html>
<html>
    <head>
        <title>文件上传</title>
        <meta charset="utf-8" />
        <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
    </head>
    <body>
        <h1>文件上传</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <input type="file" name="file1" /><br />
            <input type="submit" value="提交" name="submit" />
        </form>
    </body>
</html>

