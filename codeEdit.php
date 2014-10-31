<?php
if ($_POST['submit']) {
    $pageList = array();
    for ($i = 0; $i < count($_POST['href']); $i++) {
        $pageList[] = array(
            'href' => $_POST['href'][$i],
            'name' => $_POST['name'][$i],
            'description' => $_POST['description'][$i],
        );
    }
    file_put_contents('config.php', "<?php\r\n \$pageList=" . var_export($pageList, TRUE) . ';');
    header('Location:index.php');
    exit();
}
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
        <script type="text/javascript" src="./js/jquery-1.9.0.min.js"></script>
        <style type="text/css">
            table{
                table-layout:fixed;
                empty-cells:show;
                border-collapse: collapse;
                margin:0 auto;
                text-align: center;
            }
            td{
                height:30px;
            }
            .table{
                border:1px solid #cad9ea;
                color:#666;
            }
            .table th {
                background-repeat:repeat-x;
                height:30px;
            }
            .table td,.table th{
                border:1px solid #cad9ea;
                padding:0 1em 0;
            }
            .table tr.alter{
                background-color:#f5fafe;
            }
            a{
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center;"><h1>PHP代码段</h1></div>
        <form action="" name="form" method="post" >
            <table class="table" width="90%">
                <thead>
                <th width="20%">标题</th>
                <th width="20%">链接地址</th>
                <th width="50%">描述</th>
                <th width="10%"><a onclick="addTd($(this));" number='<?php echo count($pageList); ?>'>新增</a></th>
                </thead>
                <tbody>
                    <?php foreach ($pageList as $key => $page): ?>
                        <tr>
                            <td><input type="text" value="<?php echo $page['href']; ?>" name="href[<?php echo $key; ?>]" style="width: 95%;"/></td>
                            <td><input type="text" value="<?php echo $page['name']; ?>" name="name[<?php echo $key; ?>]" style="width: 95%;"/></td>
                            <td><input type="text" value="<?php echo $page['description']; ?>" name="description[<?php echo $key; ?>]" style="width: 95%;"/></td>
                            <td><a onclick="delTd($(this));">删除</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                <td colspan='4'><input type="submit" name="submit" value="保存"/><input type="button" name="cancel" value="取消" onclick="window.location.href = 'index.php';"/></td>
                </tfoot>
            </table>
        </form>
        <script>
            var addTd = function (obj) {
                var num = parseInt(obj.attr('number'));
                var trHtml = '<tr><td><input type="text" value="" name="href[' + num + ']" style="width: 95%;"/></td><td><input type="text" value="" name="name[' + num + ']" style="width: 95%;"/></td><td><input type="text" value="" name="description[' + num + ']" style="width: 95%;"/></td><td><a onclick="delTd($(this));">删除</a></td></tr>';
                $('table.table tbody').append(trHtml);
                obj.attr('number', num + 1);
            }
            var delTd = function (obj) {
                obj.parents('tr').remove();
            }
        </script>
    </body>
</html>