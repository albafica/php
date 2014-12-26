<?php
//curl 'http://10.100.2.67/common/login.php?act=ajaxlogin' -H 'Host: 10.100.2.67' -H 'User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:33.0) Gecko/20100101 Firefox/33.0' -H 'Accept: application/json, text/javascript, */*; q=0.01' -H 'Accept-Language: zh-cn,zh;q=0.8,en-us;q=0.5,en;q=0.3' -H 'Accept-Encoding: gzip, deflate' -H 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8' -H 'X-Requested-With: XMLHttpRequest' -H 'Referer: http://10.100.2.67/' -H 'Cookie: GUID=GUID%3D1416901268473875441%26%7C%26guiddate%3D1416901268; usign=usign%3DADkGbVQoBzBVNF0xA3gEMgMwCiUHMFo2V2JTfQoxU2deZ1c6B2xUYlw8AW5WNlBkV2UHMldgUnsAZFBWWDEEYgBh; AccessKey=spyKey%3D1417342492365739216; LoginRole=oldrole%3Dmanager' --data 'username=abspy48%40qq.com&userpwd=abc123&islayer=1&role=xpaZpaGgxg%3D%3D&randomcode=123123'
http://10.100.2.67/common/login.php?act=ajaxlogin&islayer=1&randomcode=123123&role=xpaZpaGgxg%3D%3D&username=abspy48%40qq.com&userpwd=abc123
//$ch = curl_init();
//curl_setopt($ch, $option, 'http://10.100.2.67/common/login.php?act=ajaxlogin');
?>
<!doctype html>
<html>
    <head>
        <script src="http://10.100.2.67/js/plugin/jquery-1.7.2.min.js?1417484470" language="javascript"></script>
    </head>
    <body>
        <script>
            $.ajax({
                url: 'http://10.100.2.67/common/login.php?act=ajaxlogin',
                type: 'post',
                dataType: 'json',
                data: {
                    islayer: 1,
                    randomcode: '123123',
                    role: 'xpaZpaGgxg==',
                    username: 'abspy@qq.com',
                    userpwd: 'abc123'
                },
                success: function (data) {
                    console.log(data);
                }
            });
        </script>
    </body>
</html>