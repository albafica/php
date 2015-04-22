<?php

header("Content-Type:text/html;charset=utf-8;");
//公网范围 192.0.0.1-223.255.255.254
exec("ipconfig", $output, $result);
$output = join("", $output);
preg_match_all("$\s+(\d+\.\d+\.\d+\.\d+)\s+$", $output, $matches);
$matches = $matches[0];
echo "操作系统检测:<br/>";
foreach ($matches as $ip) {
    $subip = explode(".", $ip);
    if ($subip[0] > 191 && $subip[3] > 0 && $subip[0] < 224 && $subip[3] < 255) {
        echo "外网ip:" . $ip . "<br/>";
    }
}
$ip138 = "http://iframe.ip138.com/ic.asp";
echo "<a href='$ip138'>ip138检测</a>:<br/>";


$ip138 = "http://iframe.ip138.com/ic.asp";
$content = file_get_contents($ip138);
preg_match("$\[(\d+\.\d+\.\d+\.\d+)\]$", $content, $ip);
$subip = explode(".", $ip[1]);
if ($subip[0] > 191 && $subip[3] > 0 && $subip[0] < 224 && $subip[3] < 255) {
    echo "外网ip:" . $ip[1] . "<br/>";
}
$chinaz = "http://tool.chinaz.com/IP/?IP=";
echo "<a href='$chinaz'>站长工具检测</a>:<br/>";


$content = file_get_contents($chinaz);
preg_match("$\>(\d+\.\d+\.\d+\.\d+)\<$", $content, $ip);
$subip = explode(".", $ip[1]);
if ($subip[0] > 191 && $subip[3] > 0 && $subip[0] < 224 && $subip[3] < 255) {
    echo "外网ip:" . $ip[1] . "<br/>";
}