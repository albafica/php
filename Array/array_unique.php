<?php

$TOPCSSLOADER = array('reset.css', 'layout.css', 'style.css', 'panel-model.css', 'botton_reset.css', 'icon_reset.css', 'well_reset.css', 'UI-kit.css');
$headData['css'] = array('pr.css', 'UI-kit.css');

echo '<pre>';
$arr = array_flip(array_flip(array_merge($TOPCSSLOADER, $headData['css'])));
ksort($arr);
print_r($arr);
//print_r(array_unique($arr));


//$arr = array("a"=>"a1","b"=>'b1',"c"=>"a2","d"=>"a1");
//print_r($arr);
//$arr1 = array_flip($arr);
//print_r($arr1);//先反转一次,去掉重复值,输出Array ( [a1] => d [b1] => b [a2] => c )
//$arr2 = array_flip($arr1);
//print_r($arr2);//再反转回来,得到去重后的数组,输出Array ( [a1] => d [b1] => b [a2] => c )
//$arr3 = array_unique($arr);
//print_r($arr3);//利用php的array_unique函数去重,输出Array ( [a] => a1 [b] => b1 [c] => a2 )


$arr = array(1,2,3,4,1);

var_dump(array_unique($arr));

