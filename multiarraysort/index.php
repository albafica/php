<?php

/**
 * @description PHP二维数组多字段排序方法
 * @param array $data               待排序的二维数组
 * @param array $sortCriteria       排序规则
 * @param type $caseInSensitive     键名大小写敏感
 * @return boolean
 * @extradescription
 * bool array_multisort ( array $ar1 [, mixed $arg [, mixed $... [, array $... ]]] )
 * 成功时返回 TRUE， 或者在失败时返回 FALSE.   
 * array_multisort() 可以用来一次对多个数组进行排序，或者根据某一维或多维对多维数组进行排序。
 * 本函数的参数结构有些不同寻常，但是非常灵活。第一个参数必须是一个数组。接下来的每个参数可以是数组或者是下面列出的排序标志。
 * 排序顺序标志：
 *      SORT_ASC - 按照上升顺序排序
 *      SORT_DESC - 按照下降顺序排序
 * 排序类型标志：
 *      SORT_REGULAR - 将项目按照通常方法比较
 *      SORT_NUMERIC - 将项目按照数值比较
 *      SORT_STRING - 将项目按照字符串比较
 */
function MultiSort($data, $sortCriteria, $caseInSensitive = true) {
    if (!is_array($data) || !is_array($sortCriteria))
        return false;
    $args = array();
    $i = 0;
    foreach ($sortCriteria as $sortColumn => $sortAttributes) {
        $colLists = array();
        foreach ($data as $key => $row) {
            $convertToLower = $caseInSensitive && (in_array(SORT_STRING, $sortAttributes) || in_array(SORT_REGULAR, $sortAttributes));
            $rowData = $convertToLower ? strtolower($row[$sortColumn]) : $row[$sortColumn];
            $colLists[$sortColumn][$key] = $rowData;
        }
        $args[] = &$colLists[$sortColumn];

        foreach ($sortAttributes as $sortAttribute) {
            $tmp[$i] = $sortAttribute;
            $args[] = &$tmp[$i];
            $i++;
        }
    }
    $args[] = &$data;
    call_user_func_array('array_multisort', $args);
    return end($args);
}

//Fill an array with random test data
define('MAX_ITEMS', 15);
define('MAX_VAL', 20);
for ($i = 0; $i < MAX_ITEMS; $i++)
    $data[] = array('field1' => rand(1, MAX_VAL), 'field2' => rand(1, MAX_VAL), 'field3' => rand(1, MAX_VAL));

//Set the sort criteria (add as many fields as you want)
$sortCriteria = array(
    'field1' => array(SORT_DESC, SORT_NUMERIC),
    'field3' => array(SORT_DESC, SORT_NUMERIC)
);

//Call it like this: 
$sortedData = MultiSort($data, $sortCriteria, true);
var_dump($sortedData);
