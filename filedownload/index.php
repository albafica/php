<?php
if ($_POST['submit']) {
    include 'FileDownload.class.php';
    $filePath = './upload/54a0b2a67353a.zip';
    $downLoad = new FileDownload();
    $r = $downLoad->downloadFile($filePath, 'ab.zip');
    if (!$r) {
        var_dump($downLoad->getErrMsg());
    }
    exit();
}
?>
<!doctype html>
<html>
    <head>
        <title>文件下载</title>
        <meta charset="utf-8" />
        <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
    </head>
    <body>
        <h1>文件下载</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <input type="submit" value="下载" name="submit" />
        </form>
    </body>
</html>