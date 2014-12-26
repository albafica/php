<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CommonFunc {

    public static function tranStrToInt($arr) {
        if (is_array($arr)) {
            for ($i = 0; $i < count($arr); $i++) {
                $newArr[] = self::tranStrToInt($arr[$i]);
            }
        } else {
            $newArr = (int) $arr;
        }
        return $newArr;
    }

}

$arr = array(
    '3579', '3248', '277'
);
var_dump($arr);
$arr = CommonFunc::tranStrToInt($arr);
var_dump($arr);