<?php
include 'config.php';
if (!isset($pageList) || !is_array($pageList) || empty($pageList)) {
    $pageList = array();
}
?>

<!doctype html>
<html>
    <head>
        <title>PHP代码段</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>PHP代码段</h1>
        <ul>
            <?php foreach ($pageList as $page): ?>
                <li><a href="<?php echo $page['href']; ?>" target="_blank"><?php echo $page['name']; ?></a>(<?php echo $page['description']; ?>)</li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>

