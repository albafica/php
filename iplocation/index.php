<?php
$location = array();
if (isset($_POST['submit'])) {
    include 'IpLocation.class.php';
    include 'GetClientIp.php';
    $IpLocation = new IpLocation();
    $_POST['ip'] = empty($_POST['ip']) ? get_client_ip() : $_POST['ip'];
    $location = $IpLocation->getlocation($_POST['ip']);
}
?>
<!doctype html>
<html>
    <head>
        <title>IP地区查询</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form method="post" action="">
            <label>IP:</label><input type="text" name="ip" value="<?php echo $_POST['ip']; ?>" /><input type="submit" value="查询" name="submit" /><br />
            <?php if (!empty($location)): ?>
                <label>IP起始地址:</label>&nbsp;&nbsp;&nbsp;<?php echo $location['beginip']; ?><br />
                <label>IP结束地址:</label>&nbsp;&nbsp;&nbsp;<?php echo $location['endip']; ?><br />
                <label>IP所在国家:</label>&nbsp;&nbsp;&nbsp;<?php echo iconv('gb2312', 'utf-8', $location['country']); ?><br />
                <label>IP所在地区:</label>&nbsp;&nbsp;&nbsp;<?php echo iconv('gb2312', 'utf-8', $location['area']); ?>
            <?php endif; ?>
        </form>
    </body>
</html>



