<?php
$codeString = '';
if ($_POST['encode']) {
    $codeString = unicode_encode($_POST['codeString']);
} elseif ($_POST['decode']) {
    $codeString = unicode_decode($_POST['codeString']);
}
?>
<!doctype html>
<html>
    <head>
        <title>unicde转换</title>
        <meta charset="utf-8" />
        <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
        <style>
            textarea {
                border: 1px solid rgba(135, 135, 135, 1);
                border-radius: 3px;
                box-shadow: 0 0 8px rgba(135, 135, 135, 0.5);
                height: 250px;
                overflow: auto;
                padding: 5px;
                resize: none;
                width: 98%;
            }

            .submit {
                background: none repeat scroll 0 0 #fff;
                border: 1px solid #999;
                border-radius: 3px;
                box-shadow: 0 0 3px rgba(135, 135, 135, 0.5);
                color: #404040;
                display: inline-block;
                font-size: 14px;
                font-weight: 700;
                line-height: 32px;
                margin-right: 20px;
                padding: 5px;
                text-align: center;
                text-decoration: none;
                width: 120px;
            }
        </style>
    </head>
    <body>
        <h1>unicde转换</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <textarea name="codeString" placeholder="请输入内容"><?php echo $codeString; ?></textarea>
            <div style="margin-top: 15px; text-align: center;">
                <input type="submit" class="submit" value="中文2Unicode" name="encode" />
                <input type="submit" class="submit" value="Unicode2中文" name="decode" />
            </div>
        </form>
    </body>
</html>
<?php

function unicode_encode($name) {
    $name = iconv('UTF-8', 'UCS-2', $name);
    $len = strlen($name);
    $str = '';
    for ($i = 0; $i < $len - 1; $i = $i + 2) {
        $c = $name[$i];
        $c2 = $name[$i + 1];
        if (ord($c) > 0) {    // 两个字节的文字
            $str .= '\u' . base_convert(ord($c), 10, 16) . base_convert(ord($c2), 10, 16);
        } else {
            $str .= $c2;
        }
    }
    return $str;
}

// 将UNICODE编码后的内容进行解码
function unicode_decode($name) {
    // 转换编码，将Unicode编码转换成可以浏览的utf-8编码
    $pattern = '/([\w]+)|(\\\u([\w]{4}))/i';
    preg_match_all($pattern, $name, $matches);
    if (!empty($matches)) {
        $name = '';
        for ($j = 0; $j < count($matches[0]); $j++) {
            $str = $matches[0][$j];
            if (strpos($str, '\\u') === 0) {
                $code = base_convert(substr($str, 2, 2), 16, 10);
                $code2 = base_convert(substr($str, 4), 16, 10);
                $c = chr($code) . chr($code2);
                $c = iconv('UCS-2', 'UTF-8', $c);
                $name .= $c;
            } else {
                $name .= $str;
            }
        }
    }
    return $name;
}
?>