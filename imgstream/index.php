<!doctype html>
<html>
    <head>
        <title>PHP图片文件流转换</title>
        <meta charset="utf-8" />
        <script src="../js/jquery-1.11.0.min.js" ></script>
        <script src="../js/bootstrap/bootstrap/js/bootstrap.min.js" ></script>
        <link href="../js/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>
        <h1>PHP图片文件流转换</h1>
        <div class="container-fluid">
            <div class="row">
                <div id="imgdiv" class="col-md-6" style="border: 2px solid #777; height: 500px;">
                </div>
                <div id="imgstreamdiv" class="col-md-6" style="border: 2px solid #777; height: 500px; padding: 0px;" >
                    <textarea id="streamval" class="form-control" style="height: 496px;"></textarea>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 20px;">
            <form id="uploadattach1" name="uploadattach" method="post" enctype="multipart/form-data" target="uploadIframe" action="">
                <button type="button" id="img2stream" class="btn btn-primary" style="margin-right: 20px;">
                    图片转换为文件流
                </button>
                <span>
                    <input type="file" id="imgupload" name="imgupload" style="cursor: pointer;cursor: pointer;left: 640px;height: 34px;opacity: 0;position: absolute;top: 590px;width: 150px;"/>
                </span>
                <button type="button" id="stream2img" class="btn btn-primary" style="margin-right: 20px;">文件流转换为图片</button>
                <span>
                    <input type="file" id="fileupload" name="fileupload" style="cursor: pointer;cursor: pointer;left: 800px;height: 34px;opacity: 0;position: absolute;top: 590px;width: 150px;"/>
                </span>
                <button type="button" id="clear" class="btn btn-primary">清空</button>
            </form>
        </div>
        <iframe name="uploadIframe" id="uploadIframe" style="display:none">
        </iframe>
    </body>
    <script>
        $('#clear').click(function () {
            window.location.href = 'index.php';
        });
        function upImgErr(errMsg) {
            $('#imgdiv').html(errMsg);
        }
        function upImgSuccess(imgPath, imgStream) {
            $('#imgdiv').html('<img src="showimg.php?path=' + imgPath + '" height="480px" style="margin:10px;"/>');
            $('#streamval').val(imgStream);
        }
        function upImgSuccess1(filePath, imgStream) {
            $('#imgdiv').html('<img src="showfileimg.php?path=' + filePath + '" height="480px" style="margin:10px;"/>');
            $('#streamval').val(imgStream);
        }
        $(document).on('change', "#imgupload", function (e) {
            if ($(this).val() == '' || this.value == "") {
                return false;
            }
            document.uploadattach.action = 'imghandle.php' + "?rand=" + Math.random();
            $("form#uploadattach1").submit();
        });
        $(document).on('change', "#fileupload", function (e) {
            if ($(this).val() == '' || this.value == "") {
                return false;
            }
            document.uploadattach.action = 'handlestream.php' + "?rand=" + Math.random();
            $("form#uploadattach1").submit();
        });
    </script>
</html>
